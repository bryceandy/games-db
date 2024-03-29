<?php

namespace App\Http\Controllers;

use App\Traits\Auth\RetrievesAuthHeaders;
use App\Traits\FormatsGames;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class GameController extends Controller
{
    use FormatsGames;
    use RetrievesAuthHeaders;

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show(string $slug): Factory|View|Application
    {
        $game = Http::withHeaders($this->fetchIgdbHeaders())
            ->withBody(
                "
                    fields *, cover.url, platforms.abbreviation, genres.*, videos.*, game_modes.*, screenshots.*,
                    involved_companies.company.name, similar_games.name, similar_games.cover.url,
                    similar_games.rating, similar_games.platforms.abbreviation, similar_games.slug, websites.*;
                    where slug = \"${slug}\";
                ",
                'text/plain'
            )
            ->post(config('igdb.base_url') . 'games')
            ->json();

        abort_if(! $game, 404);

        return view('show', ['game' => $this->singleGame($game)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
