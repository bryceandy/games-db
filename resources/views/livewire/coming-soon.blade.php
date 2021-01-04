<div
    wire:init="loadGames"
    class="coming-soon-container space-y-10 mt-8"
>
    @forelse($comingSoon as $game)
        <x-game-card-small :game="$game" />
    @empty
        @foreach(range(1, 4) as $game)
            <div class="game flex animate-pulse">
                <div class="bg-gray-800 w-20 h-20 rounded-xl"></div>
                <div class="ml-4">
                    <div class="block h-4 bg-gray-700 text-transparent rounded-xl">Title goes here</div>
                    <div class="block mt-1 h-4 w-3/4 bg-gray-700 text-transparent rounded-xl">21 Jan, 2020</div>
                </div>
            </div>
        @endforeach
    @endforelse
</div>
