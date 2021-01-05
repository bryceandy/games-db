<div class="game mt-8 flex md:block flex-col items-center">
    <div class="relative inline-block">
        <a href="{{ route('games.show', $game['slug']) }}">
            <img
                src="{{ $game['cover_url'] }}"
                alt="game cover"
                class="rounded-xl hover:opacity-75 transition ease-in-out duration-100"
            />
        </a>
        @if($game['rating'])
            <div id="{{ $game['slug'] }}" class="absolute w-16 h-16 bg-gray-800 rounded-full text-sm" style="bottom: -20px;right: -20px;">
                @push('scripts')
                    @include('_rating', [
                        'id' => $game['slug'],
                        'rating' => $game['rating'],
                        'event' => null,
                    ])
                @endpush
            </div>
        @endif
    </div>
    <a
        href="{{ route('games.show', $game['slug']) }}"
        class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8"
    >
        {{ $game['name'] }}
    </a>
    @isset($game['platforms'])
        <div class="text-gray-400 mt-1 text-center md:text-left">
            {{ $game['platforms'] }}
        </div>
    @endisset
</div>
