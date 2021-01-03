<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GameController extends Controller
{
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
        $current = now()->timestamp;
        $afterFourMonths = now()->addMonths(4)->timestamp;
        $nextMonth = now()->addMonth()->timestamp;

        $multiQuery = Http::withHeaders([
            'Client-ID' => config('igdb.credentials.client_id'),
            'Authorization' => "Bearer dtzj0cl1wqhisdiz8z9glxfko0uu1p",
        ])
            ->withBody(
                "
                    query games \"anticipated\" {
                        fields name, cover.url, first_release_date, rating_count, platforms.abbreviation, rating, slug;
                        where platforms = (48,49,130,6)
                            & (first_release_date >= ${current} & first_release_date < ${afterFourMonths});
                        limit 4;
                    };
                    query games \"soon\" {
                        fields name, cover.url, first_release_date, rating_count, platforms.abbreviation, rating, slug;
                        where platforms = (48,49,130,6)
                            & (first_release_date >= ${current} & first_release_date < ${nextMonth});
                        sort first_release_date asc;
                        limit 4;
                    };
                ",
                'text/plain'
            )
            ->post(config('igdb.base_url') . 'multiquery')
            ->json();

        return view('index', [
            'mostAnticipated' => collect($multiQuery)->filter(fn($res) => $res['name'] === 'anticipated')->first()['result'],
            'comingSoon' => collect($multiQuery)->filter(fn($res) => $res['name'] === 'soon')->first()['result'],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
