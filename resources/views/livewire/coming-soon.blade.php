<div
    wire:init="loadGames"
    class="coming-soon-container space-y-10 mt-8"
>
    @foreach($comingSoon as $game)
        <div class="game flex">
            <a href="/games/{{ $game['slug'] }}">
                <img
                    src="{{ str_replace('thumb', 'cover_small', $game['cover']['url']) }}"
                    alt="game cover"
                    class="w-16 rounded-lg hover:opacity-75 transition ease-in-out duration-100"
                />
            </a>
            <div class="ml-4">
                <a href="/games/{{ $game['slug'] }}" class="hover:text-gray-300">{{ $game['name'] }}</a>
                <p class="text-gray-400 text-sm mt-1">
                    {{ \Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y') }}
                </p>
            </div>
        </div>
    @endforeach
</div>
