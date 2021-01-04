<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ViewGameTest extends TestCase
{
    /** @test */
    public function the_game_page_shows_correct_game_info()
    {
        $response = $this->get(route('games.show', 'marvels-spider-man-miles-morales'));

        $response->assertSuccessful();

        $response->assertSee("Marvel's Spider-Man: Miles Morales");

        $response->assertSee('Sony Interactive Entertainment');
    }
}
