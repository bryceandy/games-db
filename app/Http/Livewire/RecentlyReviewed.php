<?php

namespace App\Http\Livewire;

use App\Traits\Auth\RetrievesAuthHeaders;
use App\Traits\FormatsGames;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RecentlyReviewed extends Component
{
    use FormatsGames;
    use RetrievesAuthHeaders;

    public array $recentlyReviewed = [];

    public function render(): Factory|View|Application
    {
        return view('livewire.recently-reviewed');
    }

    public function loadGames()
    {
        $response = Cache::remember('reviewed_games', now(), function () {
            $before = now()->subMonths(2)->timestamp;
            $current = now()->timestamp;

            return Http::withHeaders($this->fetchIgdbHeaders())
                ->withBody(
                    "
                    fields name, cover.url, first_release_date, rating_count, platforms.abbreviation, rating, summary,
                    slug, storyline;
                    where platforms = (48,49,130,6)
                        & rating_count > 5
                        & (first_release_date >= ${before} & first_release_date < ${current});
                    limit 3;
                ",
                    'text/plain'
                )
                ->post(config('igdb.base_url') . 'games')
                ->json();
        });

        $this->handleResponse($response);
    }

    private function handleResponse($response)
    {
        $this->recentlyReviewed = $this->bigCoverGames($response);

        collect($this->recentlyReviewed)
            ->each(fn ($game) => $this->emit('reviewGameWithRatingAdded', [
                'id' => 'review_' . $game['slug'],
                'rating' => $game['rating'],
            ]));
    }
}
