<div
    wire:init="loadGames"
    class="recently-reviewed-container space-y-12 mt-8"
>
    @forelse($recentlyReviewed as $game)
        <div
            class="game bg-gray-800 rounded-lg shadow-md flex flex-col md:flex-row items-start px-6 py-6"
        >
            <div class="relative flex-none">
                <a href="/games/{{ $game['slug'] }}">
                    <img
                        src="{{ str_replace('thumb', 'cover_big', $game['cover']['url']) }}"
                        alt="game cover"
                        class="w-48 rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                    />
                </a>
                <div class="absolute w-16 h-16 bg-gray-900 rounded-full" style="bottom: -20px;right: -20px;">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">
                        {{ isset($game['rating']) ? round($game['rating'], 1) . '%' : 'NA' }}
                    </div>
                </div>
            </div>
            <div class="ml-0 md:ml-12">
                <a
                    href="/games/{{ $game['slug'] }}"
                    class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-6"
                >
                    {{ $game['name'] }}
                </a>
                <div class="text-gray-400 mt-1 hidden md:block">
                    {{ collect(collect($game['platforms'])->pluck('abbreviation'))->join(", ") }}
                </div>
                <p class="mt-6 text-gray-400">
                    {{ $game['storyline'] ?? $game['summary'] }}
                </p>
            </div>
        </div>
        @empty
            <div class="container pt-8 font-bold">
                <p>Loading ...</p>
            </div>
    @endforelse
</div>
