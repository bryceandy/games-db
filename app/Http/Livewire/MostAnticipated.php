<?php

namespace App\Http\Livewire;

use App\Traits\FormatsGames;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MostAnticipated extends Component
{
    use FormatsGames;

    public array $mostAnticipated = [];

    public function render(): Factory|View|Application
    {
        return view('livewire.most-anticipated');
    }

    public function loadGames()
    {
        $current = now()->timestamp;
        $afterFourMonths = now()->addMonths(4)->timestamp;

        $response = Http::withHeaders([
            'Client-ID' => config('igdb.credentials.client_id'),
            'Authorization' => "Bearer " . env('TWITCH_TOKEN'),
        ])
            ->withBody(
                "
                    fields name, cover.url, first_release_date, rating_count, platforms.abbreviation, rating, slug;
                    where platforms = (48,49,130,6)
                        & (first_release_date >= ${current} & first_release_date < ${afterFourMonths});
                    limit 4;
                ",
                'text/plain'
            )
            ->post(config('igdb.base_url') . 'games');

        $this->handleResponse($response);
    }

    private function handleResponse(Response $response)
    {
        if ($response->successful()) {
            $this->mostAnticipated = $this->smallCoverGames($response->json());
        }
    }
}
