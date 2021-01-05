<?php

namespace Tests\Feature;

use App\Http\Livewire\SearchDropdown;
use Livewire\Livewire;
use Tests\TestCase;

class SearchDropdownTest extends TestCase
{
    /** @test */
    public function the_dropdown_searches_for_games()
    {
        Livewire::test(SearchDropdown::class)
            ->assertDontSee($this->fakeGame['name'])
            ->set('search', 'spider')
            ->assertSee($this->fakeGame['name']);
    }
}
