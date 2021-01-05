<?php

namespace Tests\Feature;

use App\Http\Livewire\PopularGames;
use Livewire\Livewire;
use Tests\TestCase;

class PopularGamesTest extends TestCase
{
    /** @test */
    public function the_home_page_shows_popular_games()
    {
        Livewire::test(PopularGames::class)
            ->assertSet('popularGames', [])
            ->call('loadGames')
            ->assertSee("Marvel's Spider-Man: Miles Morales")
            ->assertSee(round($this->fakeGame[0]['rating'], 1));
    }
}
