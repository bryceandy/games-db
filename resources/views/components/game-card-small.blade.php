<div class="game flex">
    <a href="{{ route('games.show', $game['slug']) }}">
        <img
            src="{{ $game['cover_url'] }}"
            alt="game cover"
            class="w-20 rounded-lg hover:opacity-75 transition ease-in-out duration-100"
        />
    </a>
    <div class="ml-4">
        <a href="{{ route('games.show', $game['slug']) }}" class="hover:text-gray-300">{{ $game['name'] }}</a>
        <p class="text-gray-400 text-sm mt-1">{{ $game['first_release_date'] }}</p>
    </div>
</div>
