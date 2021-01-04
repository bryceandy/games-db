<?php

namespace App\Traits;

trait FormatsGames
{
    public function singleGame($games): array
    {
        return collect($games)
            ->map(fn($game) => collect($game)->merge([
                'cover_url' => str_replace('thumb', 'cover_big', $game['cover']['url']),
                'genres' => collect($game['genres'])->pluck('name')->join(", "),
                'company_names' => isset($game['involved_companies'])
                    ? collect($game['involved_companies'])->pluck('company.name')->join(", ")
                    : null,
                'platforms' => isset($game['platforms'])
                    ? collect($game['platforms'])->pluck('abbreviation')->join(", ")
                    : null,
                'rating' => isset($game['rating']) ? round($game['rating'], 1) . '%' : 'NA',
                'aggregated_rating' => isset($game['aggregated_rating'])
                    ? round($game['aggregated_rating'], 1) . '%'
                    : 'NA',
                'screenshots' => collect($game['screenshots'])
                    ->map(fn($screenshot) => str_replace('thumb', 'screenshot_huge', $screenshot['url']))
                    ->toArray(),
                'similar_games' => collect($game['similar_games'])
                    ->filter(fn($item) => isset($item['cover']))
                    ->map(fn($game) => collect($game)->merge([
                        'cover_url' => str_replace('thumb', 'cover_big', $game['cover']['url']),
                        'rating' => isset($game['rating']) ? round($game['rating'], 1) . '%' : 'NA',
                        'platforms' => isset($game['platforms'])
                            ? collect($game['platforms'])->pluck('abbreviation')->join(", ")
                            : null,
                    ]))
                    ->toArray()
            ]))
            ->first()
            ->toArray();
    }
}
