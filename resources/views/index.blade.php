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
                <div class="text-gray-400 mt-1">Playstation 5</div>
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
                <div class="text-gray-400 mt-1">X Box III</div>
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
                <div class="text-gray-400 mt-1">Nintendo Twitch</div>
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
                <div class="text-gray-400 mt-1">Play Station 4</div>
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
                <div class="text-gray-400 mt-1">Play Station 5</div>
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
                <div class="text-gray-400 mt-1">Play Station 5</div>
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
                <div class="text-gray-400 mt-1">Play Station Portable</div>
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
                <div class="text-gray-400 mt-1">X Box IV</div>
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
                <div class="text-gray-400 mt-1">X Box V</div>
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
                <div class="text-gray-400 mt-1">Playstation 5, PC</div>
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
                <div class="text-gray-400 mt-1">PC, X Box</div>
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
                <div class="text-gray-400 mt-1">X Box</div>
            </div>
        </div>
        {{--End popular games--}}
        <div class="flex my-10">
            <div class="recently-reviewed w-3/4 mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
            </div>
            {{--End recently viewed--}}
            <div class="most-anticipated w-1/4">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
            </div>
            {{--End most anticipated--}}
        </div>
    </div>
@endsection
