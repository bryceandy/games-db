<?php

namespace App\Http\Controllers;

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

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        /*$authRequest = Http::post(
            config('igdb.auth_url'),
            [
                'client_id' => config('igdb.credentials.client_id'),
                'client_secret' => config('igdb.credentials.client_secret'),
                'grant_type' => 'client_credentials',
            ]
        );*/
        return view('index');
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

    /**
     * Display the specified resource.
     *
     * @param string $slug
     * @return Factory|View|Application
     */
    public function show(string $slug): Factory|View|Application
    {
        $game = Http::withHeaders([
            'Client-ID' => config('igdb.credentials.client_id'),
            'Authorization' => "Bearer dtzj0cl1wqhisdiz8z9glxfko0uu1p",
        ])
            ->withBody(
                "
                    fields *, cover.url, platforms.abbreviation, genres.*, videos.*, game_modes.*, screenshots.*,
                     'involved_companies.company.name', similar_games.name, similar_games.cover.url,
                      similar_games.rating, similar_games.platforms.abbreviation, similar_games.slug, websites.*;
                    where slug = \"${slug}\";
                ",
                'text/plain'
            )
            ->post(config('igdb.base_url') . 'games')
            ->json();

        abort_if(! $game, 404);

        return view('show', ['game' => $this->formatSingleGame($game)]);
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
