<?php

namespace App\Traits\Auth;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use JetBrains\PhpStorm\ArrayShape;

trait RetrievesAuthHeaders
{
    #[ArrayShape([
        'Client-ID' => "\Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed",
        'Authorization' => "string",
    ])]
    public function fetchIgdbHeaders(): array
    {
        $token = Cache::remember(
            'twitch_access_token',
            4804500,
            fn() => Http::post(config('igdb.auth_url'), [
                'client_id' => config('igdb.credentials.client_id'),
                'client_secret' => config('igdb.credentials.client_secret'),
                'grant_type' => 'client_credentials',
            ])
                ->throwIf(App::isLocal())
                ->json('access_token')
        );

        return [
            'Client-ID' => config('igdb.credentials.client_id'),
            'Authorization' => "Bearer $token",
        ];
    }
}
