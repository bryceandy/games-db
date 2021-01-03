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
        @foreach(range(1, 3) as $game)
            <div class="game mt-8 flex md:block flex-col items-center animate-pulse">
                <div class="relative inline-block">
                    <div class="bg-gray-800 w-40 h-56 rounded-xl"></div>
                </div>
                <div class="block mt-4 w-1/2 h-4 bg-gray-800 rounded"></div>
                <div class="block mt-1 w-3/4 h-36 bg-gray-800 rounded"></div>
            </div>
        @endforeach
    @endforelse
</div>
