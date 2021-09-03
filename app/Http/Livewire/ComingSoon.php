<?php

namespace App\Http\Livewire;

use App\Traits\Auth\RetrievesAuthHeaders;
use App\Traits\FormatsGames;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ComingSoon extends Component
{
    use FormatsGames;
    use RetrievesAuthHeaders;

    public array $comingSoon = [];

    public function render(): Factory|View|Application
    {
        return view('livewire.coming-soon');
    }

    public function loadGames()
    {
        $current = now()->timestamp;
        $nextMonth = now()->addMonth()->timestamp;

        $response = Http::withHeaders($this->fetchIgdbHeaders())
            ->withBody(
                "
                    fields name, cover.url, first_release_date, rating_count, platforms.abbreviation, rating, slug;
                    where platforms = (48,49,130,6)
                        & (first_release_date >= ${current} & first_release_date < ${nextMonth});
                    sort first_release_date asc;
                    limit 10;
                ",
                'text/plain'
            )
            ->post(config('igdb.base_url') . 'games');

        $this->handleResponse($response);
    }

    private function handleResponse(Response $response)
    {
        if ($response->successful()) {
            $this->comingSoon = $this->smallCoverGames(
                collect($response->json())
                    ->filter(fn($game) => isset($game['cover']))
                    ->take(4)
                    ->all()
            );
        }
    }
}
