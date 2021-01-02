@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            @foreach($popularGames as $game)
                <div class="game mt-8 flex md:block flex-col items-center">
                    <div class="relative inline-block">
                        <a href="#">
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
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        {{ $game['name'] }}
                    </a>
                    <div class="text-gray-400 mt-1 text-center md:text-left">
                        {{ collect(collect($game['platforms'])->pluck('abbreviation'))->join(", ") }}
                    </div>
                </div>
            @endforeach
        </div>
        {{--End popular games--}}
        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    @foreach($recentlyReviewed as $game)
                        <div class="game bg-gray-800 rounded-lg shadow-md flex flex-col md:flex-row items-start px-6 py-6">
                            <div class="relative flex-none">
                                <a href="#">
                                    <img
                                        src="{{ str_replace('thumb', 'cover_big', $game['cover']['url']) }}"
                                        alt="game cover"
                                        class="w-48 rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                                    />
                                </a>
                                <div class="absolute w-16 h-16 bg-gray-900 rounded-full" style="bottom: -20px;right: -20px;">
                                    <div class="font-semibold text-xs flex justify-center items-center h-full">
                                        {{ isset($game['rating']) ? round($game['rating'], 1) . '%' : 'NA' }}
                                    </div>
                                </div>
                            </div>
                            <div class="ml-0 md:ml-12">
                                <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-6">
                                    {{ $game['name'] }}
                                </a>
                                <div class="text-gray-400 mt-1 hidden md:block">Playstation 5</div>
                                <p class="mt-6 text-gray-400">
                                    {{ $game['summary'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{--End recently viewed--}}
            <div class="most-anticipated-coming-soon mt-12 lg:mt-0 w-full md:w-1/4">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img
                                src="{{ asset('biomutant.jpg') }}"
                                alt="game cover"
                                class="w-16 rounded-lg hover:opacity-75 transition ease-in-out duration-100"
                            />
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Biomutant</a>
                            <p class="text-gray-400 text-sm mt-1">Sept 20, 2021</p>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img
                                src="{{ asset('halo.jpg') }}"
                                alt="game cover"
                                class="w-16 rounded-lg hover:opacity-75 transition ease-in-out duration-100"
                            />
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Halo Infinite</a>
                            <p class="text-gray-400 text-sm mt-1">Oct, 2021</p>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img
                                src="{{ asset('horizon.jpg') }}"
                                alt="game cover"
                                class="w-16 rounded-lg hover:opacity-75 transition ease-in-out duration-100"
                            />
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Horizon Forbidden West</a>
                            <p class="text-gray-400 text-sm mt-1">Dec, 2021</p>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img
                                src="{{ asset('vampire.jpg') }}"
                                alt="game cover"
                                class="w-16 rounded-lg hover:opacity-75 transition ease-in-out duration-100"
                            />
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Vampire: The Masquerade</a>
                            <p class="text-gray-400 text-sm mt-1">March, 2021</p>
                        </div>
                    </div>
                </div>
                {{--End most anticipated--}}
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-10">Coming Soon</h2>
                <div class="coming-soon-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img
                                src="{{ asset('biomutant.jpg') }}"
                                alt="game cover"
                                class="w-16 rounded-lg hover:opacity-75 transition ease-in-out duration-100"
                            />
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Biomutant</a>
                            <p class="text-gray-400 text-sm mt-1">Sept 20, 2021</p>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img
                                src="{{ asset('halo.jpg') }}"
                                alt="game cover"
                                class="w-16 rounded-lg hover:opacity-75 transition ease-in-out duration-100"
                            />
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Halo Infinite</a>
                            <p class="text-gray-400 text-sm mt-1">Oct, 2021</p>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img
                                src="{{ asset('horizon.jpg') }}"
                                alt="game cover"
                                class="w-16 rounded-lg hover:opacity-75 transition ease-in-out duration-100"
                            />
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Horizon Forbidden West</a>
                            <p class="text-gray-400 text-sm mt-1">Dec, 2021</p>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img
                                src="{{ asset('vampire.jpg') }}"
                                alt="game cover"
                                class="w-16 rounded-lg hover:opacity-75 transition ease-in-out duration-100"
                            />
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Vampire: The Masquerade</a>
                            <p class="text-gray-400 text-sm mt-1">March, 2021</p>
                        </div>
                    </div>
                </div>
                {{--End coming soon--}}
            </div>
        </div>
    </div>
@endsection
