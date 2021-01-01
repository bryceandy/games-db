@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img
                            src="{{ asset('assasinscreed.jpg') }}"
                            alt="game cover"
                            class="rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                        />
                    </a>
                    <div class="absolute w-16 h-16 bg-gray-800 rounded-full" style="bottom: -20px;right: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">85%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Assassin's Creed: Valhalla
                </a>
                <div class="text-gray-400 mt-1">
                    Xbox One, PlayStation 4, PC (Microsoft Windows), Nintendo Switch
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img
                            src="{{ asset('starwars.jpg') }}"
                            alt="game cover"
                            class="rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                        />
                    </a>
                    <div class="absolute w-16 h-16 bg-gray-800 rounded-full" style="bottom: -20px;right: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">81%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Star Wars: Squadrons
                </a>
                <div class="text-gray-400 mt-1">
                    Xbox One, PlayStation 4, PlayStation 5, PC (Microsoft Windows), Nintendo Switch, Xbox Series
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img
                            src="{{ asset('spiderman.jpg') }}"
                            alt="game cover"
                            class="rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                        />
                    </a>
                    <div class="absolute w-16 h-16 bg-gray-800 rounded-full" style="bottom: -20px;right: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">88%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Spider-Man: Miles Morales
                </a>
                <div class="text-gray-400 mt-1">Playstation 4, Playstation 5</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img
                            src="{{ asset('watchdogs.jpg') }}"
                            alt="game cover"
                            class="rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                        />
                    </a>
                    <div class="absolute w-16 h-16 bg-gray-800 rounded-full" style="bottom: -20px;right: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">81%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Watch Dogs: Legion
                </a>
                <div class="text-gray-400 mt-1">
                    Xbox One, PlayStation 4, PlayStation 5, PC (Microsoft Windows), Google Stadia, Xbox Series
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img
                            src="{{ asset('hyrule.jpg') }}"
                            alt="game cover"
                            class="rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                        />
                    </a>
                    <div class="absolute w-16 h-16 bg-gray-800 rounded-full" style="bottom: -20px;right: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">82%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Hyrule Warriors: Age of Calamity
                </a>
                <div class="text-gray-400 mt-1">Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img
                            src="{{ asset('mirror.jpg') }}"
                            alt="game cover"
                            class="rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                        />
                    </a>
                    <div class="absolute w-16 h-16 bg-gray-800 rounded-full" style="bottom: -20px;right: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">55%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Twin Mirror
                </a>
                <div class="text-gray-400 mt-1">
                    Xbox One, PlayStation 4, PC (Microsoft Windows)
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img
                            src="{{ asset('cyberpunk.jpg') }}"
                            alt="game cover"
                            class="rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                        />
                    </a>
                    <div class="absolute w-16 h-16 bg-gray-800 rounded-full" style="bottom: -20px;right: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">77%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Cyber Punk 2077
                </a>
                <div class="text-gray-400 mt-1">
                    Xbox One, PlayStation 4, PlayStation 5, PC (Microsoft Windows), Google Stadia, Xbox Series
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img
                            src="{{ asset('ghostrunner.jpg') }}"
                            alt="game cover"
                            class="rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                        />
                    </a>
                    <div class="absolute w-16 h-16 bg-gray-800 rounded-full" style="bottom: -20px;right: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">82%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Ghost Runner
                </a>
                <div class="text-gray-400 mt-1">
                    Xbox One, PlayStation 4, PC (Microsoft Windows), Nintendo Switch
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img
                            src="{{ asset('empire.jpg') }}"
                            alt="game cover"
                            class="rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                        />
                    </a>
                    <div class="absolute w-16 h-16 bg-gray-800 rounded-full" style="bottom: -20px;right: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">58%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Empire of Sin
                </a>
                <div class="text-gray-400 mt-1">
                    Xbox One, PlayStation 4, Mac, PC (Microsoft Windows), Nintendo Switch
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img
                            src="{{ asset('fifa.jpg') }}"
                            alt="game cover"
                            class="rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                        />
                    </a>
                    <div class="absolute w-16 h-16 bg-gray-800 rounded-full" style="bottom: -20px;right: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">71%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Fifa 21
                </a>
                <div class="text-gray-400 mt-1">
                    Xbox One, PlayStation 4, PC (Microsoft Windows), Stadia
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img
                            src="{{ asset('immortals.jpg') }}"
                            alt="game cover"
                            class="rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                        />
                    </a>
                    <div class="absolute w-16 h-16 bg-gray-800 rounded-full" style="bottom: -20px;right: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">68%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Immortals: Fenyx Rising
                </a>
                <div class="text-gray-400 mt-1">
                    Xbox One, PlayStation 4, PlayStation 5, PC (Microsoft Windows), Nintendo Switch, Google Stadia, Xbox Series
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img
                            src="{{ asset('demon.jpg') }}"
                            alt="game cover"
                            class="rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                        />
                    </a>
                    <div class="absolute w-16 h-16 bg-gray-800 rounded-full" style="bottom: -20px;right: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">93%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Demon's Souls
                </a>
                <div class="text-gray-400 mt-1">Playstation 5</div>
            </div>
        </div>
        {{--End popular games--}}
        <div class="flex my-10">
            <div class="recently-reviewed w-3/4 mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img
                                    src="{{ asset('demon.jpg') }}"
                                    alt="game cover"
                                    class="w-48 rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                                />
                            </a>
                            <div class="absolute w-16 h-16 bg-gray-900 rounded-full" style="bottom: -20px;right: -20px;">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">93%</div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Demon's Souls
                            </a>
                            <div class="text-gray-400 mt-1">Playstation 5</div>
                            <p class="mt-6 text-gray-400">
                                A full remake of Demon's Souls (2009) featuring improved graphics and animations, sound and lighting tweaks and a reimagining of many of the visual, musical and mechanical aspects of the original game.
                            </p>
                        </div>
                    </div>
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img
                                    src="{{ asset('watchdogs.jpg') }}"
                                    alt="game cover"
                                    class="w-48 rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                                />
                            </a>
                            <div class="absolute w-16 h-16 bg-gray-900 rounded-full" style="bottom: -20px;right: -20px;">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">81%</div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Watch Dogs: Legion
                            </a>
                            <div class="text-gray-400 mt-1">
                                Xbox One, PlayStation 4, PlayStation 5, PC (Microsoft Windows), Google Stadia, Xbox Series
                            </div>
                            <p class="mt-6 text-gray-400">
                                In Watch Dogs: Legion, near future London is facing its downfall...unless you do something about it. Build a resistance, fight back, and give the city back to the people. It’s time to rise up.
                            </p>
                        </div>
                    </div>
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img
                                    src="{{ asset('immortals.jpg') }}"
                                    alt="game cover"
                                    class="w-48 rounded-xl hover:opacity-75 transition ease-in-out duration-100"
                                />
                            </a>
                            <div class="absolute w-16 h-16 bg-gray-900 rounded-full" style="bottom: -20px;right: -20px;">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">68%</div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Immortals: Fenyx Rising
                            </a>
                            <div class="text-gray-400 mt-1">
                                Xbox One, PlayStation 4, PlayStation 5, PC (Microsoft Windows), Nintendo Switch, Google Stadia, Xbox Series
                            </div>
                            <p class="mt-6 text-gray-400">
                                From the creators of Assassin’s Creed Odyssey comes a storybook adventure about a forgotten hero on a quest to save the Greek gods.

                                Embark on a journey to the Isle of the Blessed, taken over by dangerous creatures of mythology.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{--End recently viewed--}}
            <div class="most-anticipated w-1/4">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
            </div>
            {{--End most anticipated--}}
        </div>
    </div>
@endsection
