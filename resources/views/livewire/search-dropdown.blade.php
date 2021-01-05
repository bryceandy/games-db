<div class="relative" x-data="{ isVisible: true }" @click.away="isVisible = false">
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
    <svg
        wire:loading
        class="animate-spin absolute top-0 right-0 text-gray-400 w-5 mr-2 mt-1.5 fill-current"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 512 512"
    >
        <path
            d="M288 39.056v16.659c0 10.804 7.281 20.159 17.686 23.066C383.204 100.434 440 171.518 440 256c0 101.689-82.295 184-184 184-101.689 0-184-82.295-184-184 0-84.47 56.786-155.564 134.312-177.219C216.719 75.874 224 66.517 224 55.712V39.064c0-15.709-14.834-27.153-30.046-23.234C86.603 43.482 7.394 141.206 8.003 257.332c.72 137.052 111.477 246.956 248.531 246.667C393.255 503.711 504 392.788 504 256c0-115.633-79.14-212.779-186.211-240.236C302.678 11.889 288 23.456 288 39.056z"
        />
    </svg>
    @if($search)
        <div class="absolute z-50 bg-gray-800 text-xs rounded w-64 mt-2" x-show="isVisible">
            @if(count($searchResults))
                <ul>
                    @foreach($searchResults as $game)
                        <li class="border-b border-gray-700">
                            <a
                                href="{{ route('games.show', $game['slug']) }}"
                                class="rounded block hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150"
                            >
                                <img
                                    src="{{ $game['cover_url'] ?? asset('cover_placeholder.jpg') }}"
                                    alt="cover"
                                    class="rounded w-10 h-12"
                                >
                                <span class="ml-4">{{ $game['name'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3 rounded">No results</div>
            @endif
        </div>
    @endif
</div>
