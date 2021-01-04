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

    public function render(): Factory|View|Application
    {
        return view('livewire.popular-games');
    }

    public function loadGames(): void
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
            $this->popularGames = $this->formatForView($response->json());
        }
    }

    private function formatForView($games): array
    {
        return collect($games)->map(fn($game) => collect($game)->merge([
            'cover_url' => str_replace('thumb', 'cover_big', $game['cover']['url']),
            'rating' => isset($game['rating']) ? round($game['rating'], 1) . '%' : 'NA',
            'platforms' => collect($game['platforms'])->pluck('abbreviation')->join(", "),
        ]))->toArray();
    }
}
