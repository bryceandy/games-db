<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PopularGames extends Component
{
    public array $popularGames = [];

    public bool $readyToLoad = false;

    public function loadPopularGames(): void
    {
        $before = now()->subMonths(2)->timestamp;
        $after = now()->addMonths(2)->timestamp;

        $response = Http::withHeaders([
            'Client-ID' => config('igdb.credentials.client_id'),
            'Authorization' => "Bearer dtzj0cl1wqhisdiz8z9glxfko0uu1p",
        ])
            ->withBody(
                "
                    fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating, slug;
                    where platforms = (48,49,130,6)
                        & total_rating_count > 5
                        & (first_release_date >= ${before} & first_release_date < ${after});
                    sort total_rating_count desc;
                    limit 12;
                ",
                'text/plain'
            )
            ->post(config('igdb.base_url') . 'games');

        if ($response->successful()) {
            $this->popularGames = $response->json();
            $this->readyToLoad = true;
        }
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.popular-games', [
            'popularGames' => $this->popularGames,
        ]);
    }
}
