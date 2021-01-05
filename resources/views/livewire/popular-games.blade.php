<div
    wire:init="loadGames"
    class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16"
>
    @forelse($popularGames as $game)
        <x-game-card :game="$game" />
        @empty
            @foreach(range(1, 12) as $game)
                <div class="game mt-8 flex md:block flex-col items-center animate-pulse">
                    <div class="relative inline-block">
                        <div class="bg-gray-800 w-40 h-56 rounded-xl"></div>
                    </div>
                    <div class="block mt-4 h-4 bg-gray-700 rounded-xl"></div>
                    <div class="block mt-1 h-4 w-3/4 bg-gray-700 rounded-xl text-transparent">
                        PC, Switch, PS5
                    </div>
                </div>
            @endforeach
    @endforelse
</div>

@push('scripts')
    @include('_rating', [
        'event' => 'gameWithRatingAdded',
    ])
@endpush
