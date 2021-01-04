<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GameCardSmall extends Component
{
    public string $routeUrl;

    public string $coverUrl;

    public string $date;

    public string $name;

    /**
     * Create a new component instance.
     *
     * @param $routeUrl
     * @param $coverUrl
     * @param $date
     * @param $name
     */
    public function __construct($routeUrl, $coverUrl, $date, $name)
    {
        $this->routeUrl = $routeUrl;
        $this->coverUrl = $coverUrl;
        $this->date = $date;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render(): View|string
    {
        return view('components.game-card-small');
    }
}
