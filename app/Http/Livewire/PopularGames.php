<?php

namespace App\Http\Livewire;

use App\Traits\Auth\RetrievesAuthHeaders;
use App\Traits\FormatsGames;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PopularGames extends Component
{
    use FormatsGames;
    use RetrievesAuthHeaders;

    public array $popularGames = [];

    public function render(): Factory|View|Application
    {
        return view('livewire.popular-games');
    }

    public function loadGames(): void
    {
        $response = Cache::remember('popular_games', now()->addDays(3), function () {
            $before = now()->subMonths(2)->timestamp;
            $after = now()->addMonths(2)->timestamp;

            return Http::withHeaders($this->fetchIgdbHeaders())
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
                ->post(config('igdb.base_url') . 'games')
                ->throwIf(App::isLocal())
                ->json();
        });

        $this->handleResponse($response);
    }

    private function handleResponse($response)
    {
        $this->popularGames = $this->bigCoverGames($response);

        collect($this->popularGames)
            ->filter(fn ($game) => $game['rating'])
            ->each(fn ($game) => $this->emit('gameWithRatingAdded', [
                'id' => $game['slug'],
                'rating' => $game['rating'],
            ]));
    }
}
