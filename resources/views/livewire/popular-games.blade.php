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
        <div class="container mt-8 mx-auto">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"
                class="animate-spin w-5 h-5 fill-current">
                <path
                    d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z"
                />
            </svg>
        </div>
    @endforelse
</div>
