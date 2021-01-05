<div class="relative">
    <label for="search"></label>
    <input
        wire:model.debounce.300ms="search"
        type="text"
        id="search"
        class="bg-gray-800 text-sm rounded-full px-3 py-1 w-64 focus:outline-none focus:ring focus:border-blue-300 pl-8"
        placeholder="Search..."
    />
    <svg
        class="absolute top-0 ml-2 h-full text-gray-400 w-4 fill-current"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 512 512"
    >
        <path
            d="M456.69 421.39L362.6 327.3a173.81 173.81 0 0034.84-104.58C397.44 126.38 319.06 48 222.72 48S48 126.38 48 222.72s78.38 174.72 174.72 174.72A173.81 173.81 0 00327.3 362.6l94.09 94.09a25 25 0 0035.3-35.3zM97.92 222.72a124.8 124.8 0 11124.8 124.8 124.95 124.95 0 01-124.8-124.8z"
        />
    </svg>
    @if(count($searchResults))
        <div class="absolute z-50 bg-gray-800 text-xs rounded w-64 mt-2">
            <ul>
                @foreach($searchResults as $game)
                    <li class="border-b border-gray-700">
                        <a
                            href="{{ route('games.show', $game['slug']) }}"
                            class="rounded block hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150"
                        >
                            <img src="{{ $game['cover_url'] }}" alt="cover" class="rounded">
                            <span class="ml-4">{{ $game['name'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
