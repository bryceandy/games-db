<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GameCard extends Component
{
    public string $routeUrl;

    public string $coverUrl;

    public float|int|string $rating;

    /**
     * Create a new component instance.
     *
     * @param $routeUrl
     * @param $coverUrl
     * @param $rating
     */
    public function __construct($routeUrl, $coverUrl, $rating)
    {
        $this->routeUrl = $routeUrl;
        $this->coverUrl = $coverUrl;
        $this->rating = $rating;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render(): View|string
    {
        return view('components.game-card');
    }
}
