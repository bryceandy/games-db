<?php

namespace Tests\Feature;

use Tests\TestCase;

class ViewGameTest extends TestCase
{
    /** @test */
    public function the_game_page_shows_correct_game_info()
    {
        $response = $this->get(route('games.show', 'marvels-spider-man-miles-morales'));

        $response->assertSuccessful();

        $response->assertSee($this->fakeGame['name']);

        $companies = collect($this->fakeGame['involved_companies'])
            ->pluck('company.name')
            ->join(", ");

        $response->assertSee($companies);

        $response->assertSee(round($this->fakeGame['aggregated_rating'], 1));
    }
}
