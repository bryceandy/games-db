<div class="relative inline-block">
    <a href="{{ $routeUrl }}">
        <img
            src="{{ $coverUrl }}"
            alt="game cover"
            class="rounded-xl hover:opacity-75 transition ease-in-out duration-100"
        />
    </a>
    <div class="absolute w-16 h-16 bg-gray-800 rounded-full" style="bottom: -20px;right: -20px;">
        <div class="font-semibold text-xs flex justify-center items-center h-full">
            {{ $rating }}
        </div>
    </div>
</div>
