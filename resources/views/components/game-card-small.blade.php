<div class="game flex">
    <a href="{{ $routeUrl }}">
        <img
            src="{{ $coverUrl }}"
            alt="game cover"
            class="w-20 rounded-lg hover:opacity-75 transition ease-in-out duration-100"
        />
    </a>
    <div class="ml-4">
        <a href="{{ $routeUrl }}" class="hover:text-gray-300">{{ $name }}</a>
        <p class="text-gray-400 text-sm mt-1">{{ $date }}</p>
    </div>
</div>
