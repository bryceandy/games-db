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
        $response = Cache::remember('coming_soon_games', now()->addDays(5), function () {
            $current = now()->timestamp;
            $nextMonth = now()->addMonth()->timestamp;

            return Http::withHeaders($this->fetchIgdbHeaders())
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
                ->post(config('igdb.base_url') . 'games')
                ->throwIf(App::isLocal())
                ->json();
        });

        $this->handleResponse($response);
    }

    private function handleResponse($response)
    {
        $this->comingSoon = $this->smallCoverGames(
            collect($response)
                ->filter(fn($game) => isset($game['cover']))
                ->take(4)
                ->all()
        );
    }
}
