<?php

namespace App\Http\Livewire;

use App\Traits\Auth\RetrievesAuthHeaders;
use App\Traits\FormatsGames;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    use FormatsGames;
    use RetrievesAuthHeaders;

    public string $search = '';

    public array $searchResults = [];

    /**
     * @throws RequestException
     */
    public function render(): Factory|View|Application
    {
        $response = Http::withHeaders($this->fetchIgdbHeaders())
            ->withBody(
                "
                    search \"{$this->search}\";
                    fields name, cover.url, slug;
                    limit 10;
                ",
                'text/plain'
            )
            ->post(config('igdb.base_url') . 'games')
            ->throwIf(App::isLocal());

        $this->handleResponse($response);

        return view('livewire.search-dropdown');
    }

    private function handleResponse(Response $response)
    {
        if ($response->successful()) {
            $this->searchResults = collect($response->json())
                ->map(fn ($game) => collect($game)->merge([
                    'cover_url' => isset($game['cover'])
                        ? $this->getImageUrl($game,'micro', 'cover')
                        : null,
                ]))
                ->toArray();
        }
    }
}
