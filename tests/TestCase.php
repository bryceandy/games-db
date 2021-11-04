<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Http;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected array $fakeGame;

    public function setUp(): void
    {
        parent::setUp();

        Http::fake([
            config('igdb.base_url') . 'games' => Http::response($this->getFakeGame()),
            config('igdb.auth_url') => Http::response([
                'access_token' => '123',
            ])
        ]);

        $this->fakeGame = $this->getFakeGame()[0];
    }

    private function getFakeGame(): array
    {
        return [
            0 => [
                "aggregated_rating" => 87.9,
                "aggregated_rating_count" => 12,
                "cover" => [
                    "id" => 111326,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2dwe.jpg",
                ],
                "first_release_date" => 1605139200,
                "genres" => [
                    0 => [
                        "id" => 31,
                        "created_at" => 1323561600,
                        "name" => "Adventure",
                        "slug" => "adventure",
                        "updated_at" => 1323561600,
                        "url" => "https://www.igdb.com/genres/adventure",
                        "checksum" => "a6d85192-8d11-bad3-cc5c-dd89e2f94a47",
                    ],
                ],
                "involved_companies" => [
                    0 => [
                        "id" => 101617,
                        "company" => [
                            "id" => 834,
                            "name" => "Insomniac Games",
                        ],
                    ],
                    1 => [
                        "id" => 101639,
                        "company" => [
                            "id" => 10100,
                            "name" => "Sony Interactive Entertainment",
                        ],
                    ],
                ],
                "name" => "Marvel's Spider-Man: Miles Morales",
                "platforms" => [
                    0 => [
                        "id" => 48,
                        "abbreviation" => "PS4",
                    ],
                    1 => [
                        "id" => 167,
                        "abbreviation" => "PS5",
                    ],
                ],
                "rating" => 82.779984569956,
                "rating_count" => 22,
                "screenshots" => [
                    0 => [
                        "id" => 388179,
                        "alpha_channel" => false,
                        "animated" => false,
                        "game" => 134581,
                        "height" => 2160,
                        "image_id" => "sc8bir",
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc8bir.jpg",
                        "width" => 3840,
                        "checksum" => "1a9e2917-1c8b-2b32-2a42-66e153ca0253",
                    ],
                    1 => [
                        "id" => 388180,
                        "alpha_channel" => false,
                        "animated" => false,
                        "game" => 134581,
                        "height" => 2160,
                        "image_id" => "sc8bis",
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc8bis.jpg",
                        "width" => 3840,
                        "checksum" => "32fbaa7f-bc62-a80a-b6ce-3fc6d9eb3003",
                    ],
                ],
                "similar_games" => [
                    0 => [
                        "id" => 37419,
                        "cover" => [
                            "id" => 107550,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2azi.jpg",
                        ],
                        "name" => "Dude Simulator",
                        "platforms" => [
                            0 => [
                                "id" => 6,
                                "abbreviation" => "PC",
                            ],
                        ],
                        "rating" => 79.911633494131,
                        "slug" => "dude-simulator",
                    ],
                ],
                "slug" => "marvels-spider-man-miles-morales",
                "summary" => "The latest adventure in the Spider-Man universe will build on and expand ‘Marvel’s Spider-Man’ through an all-new story. Players will experience the rise of Miles Morales as he masters new powers to become his own Spider-Man.",
                "total_rating" => 85.339992284978,
                "total_rating_count" => 34,
                "videos" => [
                    0 => [
                        "id" => 37073,
                        "game" => 134581,
                        "name" => "Announcement Trailer",
                        "video_id" => "QXXX9-TrXrg",
                        "checksum" => "9d70d57f-264e-6a14-b153-48754c7a5ba8",
                    ],
                    1 => [
                        "id" => 40714,
                        "game" => 134581,
                        "name" => "Gameplay Demo",
                        "video_id" => "T03PxxuCfDA",
                        "checksum" => "3df12aaa-3e77-fd26-b2eb-9a71780aefde",
                    ],
                ],
                "websites" => [
                    0 => [
                        "id" => 143455,
                        "category" => 3,
                        "game" => 134581,
                        "trusted" => true,
                        "url" => "https://en.wikipedia.org/wiki/Spider-Man:_Miles_Morales",
                        "checksum" => "f5d92aa1-1466-968d-4814-6b3185987c17",
                    ],
                ],
            ],
        ];
    }
}
