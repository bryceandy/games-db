<div
    wire:init="loadGames"
    class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16"
>
    @forelse($popularGames as $game)
        <div class="game mt-8 flex md:block flex-col items-center">
            <div class="relative inline-block">
                <a href="/games/{{ $game['slug'] }}">
                    <img
                        src="{{ str_replace('thumb', 'cover_big', $game['cover']['url']) }}"
                        alt="game cover"
                        class="rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                    />
                </a>
                <div class="absolute w-16 h-16 bg-gray-800 rounded-full" style="bottom: -20px;right: -20px;">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">
                        {{ isset($game['rating']) ? round($game['rating'], 1) . '%' : 'NA' }}
                    </div>
                </div>
            </div>
            <a
                href="/games/{{ $game['slug'] }}"
                class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8"
            >
                {{ $game['name'] }}
            </a>
            <div class="text-gray-400 mt-1 text-center md:text-left">
                {{ collect(collect($game['platforms'])->pluck('abbreviation'))->join(", ") }}
            </div>
        </div>
        @empty
            @foreach(range(1, 12) as $game)
                <div class="game mt-8 flex md:block flex-col items-center animate-pulse">
                    <div class="relative inline-block">
                        <div class="bg-gray-800 w-40 h-56 rounded-xl"></div>
                    </div>
                    <div class="block mt-4 h-4 bg-gray-800 rounded"></div>
                    <div class="block mt-1 w-3/4 h-4 bg-gray-800 rounded"></div>
                </div>
            @endforeach
    @endforelse
</div>
