<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Video Games</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
            <div class="flex flex-col lg:flex-row items-center">
                <a href="/">
                    <img src="{{ asset('logo.png') }}" alt="" class="w-8 flex-none">
                </a>
                <ul class="flex ml-0 lg:ml-16 space-x-8 mt-6 lg:mt-0">
                    <li><a href="#" class="hover:text-gray-400">Games</a></li>
                    <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>
                </ul>
            </div>
            <div class="flex items-center mt-6 lg:mt-0">
                <div class="relative">
                    <label for="search"></label>
                    <input
                        type="text"
                        id="search"
                        class="bg-gray-800 text-sm rounded-full px-3 py-1 w-64 focus:outline-none focus:ring focus:border-blue-300 pl-8"
                        placeholder="Search..."
                    />
                    <div class="absolute top-0 flex items-center ml-2 h-full">
                        <a href="#">
                            <svg
                                class="text-gray-400 w-4 fill-current"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                            >
                                <path d="M456.69 421.39L362.6 327.3a173.81 173.81 0 0034.84-104.58C397.44 126.38 319.06 48 222.72 48S48 126.38 48 222.72s78.38 174.72 174.72 174.72A173.81 173.81 0 00327.3 362.6l94.09 94.09a25 25 0 0035.3-35.3zM97.92 222.72a124.8 124.8 0 11124.8 124.8 124.95 124.95 0 01-124.8-124.8z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="ml-6">
                    <a href="#">
                        <svg
                            class="w-6 text-gray-400 fill-current"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                        >
                            <path d="M333.187 237.405c32.761-23.893 54.095-62.561 54.095-106.123C387.282 58.893 328.389 0 256 0S124.718 58.893 124.718 131.282c0 43.562 21.333 82.23 54.095 106.123-81.44 31.165-139.428 110.126-139.428 202.39 0 39.814 32.391 72.205 72.205 72.205h288.82c39.814 0 72.205-32.391 72.205-72.205 0-92.264-57.988-171.225-139.428-202.39zM164.103 131.282c0-50.672 41.225-91.897 91.897-91.897s91.897 41.225 91.897 91.897S306.672 223.18 256 223.18s-91.897-41.226-91.897-91.898zM400.41 472.615H111.59c-18.097 0-32.82-14.723-32.82-32.821 0-97.726 79.504-177.231 177.231-177.231s177.231 79.504 177.231 177.231c-.001 18.098-14.724 32.821-32.822 32.821z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-8">
        @yield('content')
    </main>

    <footer class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            Powered by <a href="https://www.igdb.com" class="underline hover:text-gray-400">IGDB</a>
        </div>
    </footer>
</body>
</html>
