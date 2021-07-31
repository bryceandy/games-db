<?php

namespace App\Http\Livewire;

use App\Traits\FormatsGames;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    use FormatsGames;

    public string $search = '';

    public array $searchResults = [];

    public function render(): Factory|View|Application
    {
        $response = Http::withHeaders([
            'Client-ID' => config('igdb.credentials.client_id'),
            'Authorization' => "Bearer " . config('igdb.credentials.token'),
        ])
            ->withBody(
                "
                    search \"{$this->search}\";
                    fields name, cover.url, slug;
                    limit 10;
                ",
                'text/plain'
            )
            ->post(config('igdb.base_url') . 'games');

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
