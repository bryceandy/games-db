@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <livewire:popular-games />
        {{--End popular games--}}
        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <livewire:recently-reviewed />
            </div>
            {{--End recently viewed--}}
            <div class="most-anticipated-coming-soon mt-12 lg:mt-0 w-full md:w-1/4">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    @foreach($mostAnticipated as $game)
                        <div class="game flex">
                            <a href="/games/{{ $game['slug'] }}">
                                <img
                                    src="{{ str_replace('thumb', 'cover_small', $game['cover']['url']) }}"
                                    alt="game cover"
                                    class="w-16 rounded-lg hover:opacity-75 transition ease-in-out duration-100"
                                />
                            </a>
                            <div class="ml-4">
                                <a href="/games/{{ $game['slug'] }}" class="hover:text-gray-300">{{ $game['name'] }}</a>
                                <p class="text-gray-400 text-sm mt-1">
                                    {{ \Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y') }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{--End most anticipated--}}
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-10">Coming Soon</h2>
                <div class="coming-soon-container space-y-10 mt-8">
                    @foreach($comingSoon as $game)
                        <div class="game flex">
                            <a href="/games/{{ $game['slug'] }}">
                                <img
                                    src="{{ str_replace('thumb', 'cover_small', $game['cover']['url']) }}"
                                    alt="game cover"
                                    class="w-16 rounded-lg hover:opacity-75 transition ease-in-out duration-100"
                                />
                            </a>
                            <div class="ml-4">
                                <a href="/games/{{ $game['slug'] }}" class="hover:text-gray-300">{{ $game['name'] }}</a>
                                <p class="text-gray-400 text-sm mt-1">
                                    {{ \Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y') }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{--End coming soon--}}
            </div>
        </div>
    </div>
@endsection
