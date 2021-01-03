<div
    wire:init="loadGames"
    class="most-anticipated-container space-y-10 mt-8"
>
    @forelse($mostAnticipated as $game)
        <div class="game flex">
            <a href="{{ route('games.show', $game['slug']) }}">
                <img
                    src="{{ str_replace('thumb', 'cover_small', $game['cover']['url']) }}"
                    alt="game cover"
                    class="w-20 rounded-lg hover:opacity-75 transition ease-in-out duration-100"
                />
            </a>
            <div class="ml-4">
                <a href="{{ route('games.show', $game['slug']) }}" class="hover:text-gray-300">{{ $game['name'] }}</a>
                <p class="text-gray-400 text-sm mt-1">
                    {{ \Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y') }}
                </p>
            </div>
        </div>
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
