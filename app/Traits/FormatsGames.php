<?php

namespace App\Traits;

use Carbon\Carbon;
use JetBrains\PhpStorm\Pure;

trait FormatsGames
{
    public function singleGame($games): array
    {
        return collect($games)
            ->map(fn ($game) => collect($game)->merge([
                'cover_url' => isset($game['cover'])
                    ? $this->getImageUrl($game, 'cover_big', 'cover')
                    : null,
                'genres' => collect($game['genres'])->pluck('name')->join(", "),
                'company_names' => $this->getCompanyNames($game),
                'platforms' => $this->getPlatforms($game),
                'rating' => $this->getRating($game, 'rating'),
                'aggregated_rating' => $this->getRating($game, 'aggregated_rating'),
                'screenshots' => $this->getScreenshots($game),
                'similar_games' => $this->formatSimilarGames($game),
                'trailer' => isset($game['videos'])
                    ? 'https://youtube.com/embed/' . $game['videos'][0]['video_id']
                    : null,
                'first_release_date' => $this->getReleaseDate($game),
            ]))
            ->first()
            ->toArray();
    }

    public function getScreenshots($game): ?array
    {
        return isset($game['screenshots'])
            ? collect($game['screenshots'])
                ->map(fn ($screenshot) => [
                    'big' => $this->getImageUrl($screenshot, 'screenshot_big'),
                    'huge' => $this->getImageUrl($screenshot, 'screenshot_huge'),
                ])
                ->take(9)
                ->toArray()
            : null;
    }

    public function bigCoverGames($games): array
    {
        return collect($games)
            ->map(fn ($game) => collect($game)->merge([
                'cover_url' => $this->getImageUrl($game, 'cover_big', 'cover'),
                'rating' => $this->getRating($game, 'rating'),
                'platforms' => $this->getPlatforms($game),
            ]))
            ->toArray();
    }

    public function smallCoverGames($games): array
    {
        return collect($games)
            ->map(fn ($game) => collect($game)->merge([
                'cover_url' => $this->getImageUrl($game, 'cover_small', 'cover'),
                'first_release_date' => $this->getReleaseDate($game),
            ]))
            ->toArray();
    }

    private function getReleaseDate($game): string|null
    {
        return isset($game['first_release_date'])
            ? Carbon::parse($game['first_release_date'])->format('M d, Y')
            : null;
    }

    private function getImageUrl($obj, $uriName, $type = null): array|string
    {
        return $type
            ? str_replace('thumb', $uriName, $obj[$type]['url'])
            : str_replace('thumb', $uriName, $obj['url']);
    }

    private function getPlatforms($game): ?string
    {
        return isset($game['platforms'])
            ? collect($game['platforms'])->pluck('abbreviation')->join(", ")
            : null;
    }

    #[Pure] private function getRating($game, $key): string
    {
        return isset($game[$key]) ? round($game[$key], 1) : '0';
    }

    private function formatSimilarGames($game): array
    {
        return collect($game['similar_games'])
            ->filter(fn ($item) => isset($item['cover']))
            ->map(fn ($game) => collect($game)->merge([
                'cover_url' => $this->getImageUrl($game, 'cover_big', 'cover'),
                'rating' => $this->getRating($game, 'rating'),
                'platforms' => $this->getPlatforms($game),
            ]))
            ->take(6)
            ->toArray();
    }

    private function getCompanyNames($game): ?string
    {
        return isset($game['involved_companies'])
            ? collect($game['involved_companies'])->pluck('company.name')->join(", ")
            : null;
    }
}
