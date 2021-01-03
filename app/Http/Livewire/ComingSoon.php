<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ComingSoon extends Component
{
    public array $comingSoon = [];

    public function loadGames()
    {
        $current = now()->timestamp;
        $nextMonth = now()->addMonth()->timestamp;

        $response = Http::withHeaders([
            'Client-ID' => config('igdb.credentials.client_id'),
            'Authorization' => "Bearer dtzj0cl1wqhisdiz8z9glxfko0uu1p",
        ])
            ->withBody(
                "
                    fields name, cover.url, first_release_date, rating_count, platforms.abbreviation, rating, slug;
                    where platforms = (48,49,130,6)
                        & (first_release_date >= ${current} & first_release_date < ${nextMonth});
                    sort first_release_date asc;
                    limit 4;
                ",
                'text/plain'
            )
            ->post(config('igdb.base_url') . 'games');

        if ($response->successful()) {
            $this->comingSoon = $response->json();
        }
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.coming-soon');
    }
}
