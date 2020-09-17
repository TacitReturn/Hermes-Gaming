@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-gray-500 uppercase tracking-wide font-semibold">Popular Game</h2>
        <livewire:popular-games>
        <div class="flex flex-col lg:flex-row m-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 w-3/4 lg:mr-32">
                <h2 class="text-gray-500 tracking-wide uppercase font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    @foreach($recentlyReviewed as $game)
                        <div
                            class="game bg-black hover:bg-orange-700 transition duration-1000 rounded-lg shadow-md flex px-6 py-6">
                            <div class="relative flex-none">
                                <a href="">
                                    <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}"
                                         class="w-48 hover:opacity-75 transition ease-in-out duration-150"
                                         alt="Game image"/>
                                </a>
                                @if(isset($game['rating']))
                                    <div
                                        style="right: -20px; bottom: -20px;"
                                        class="absolute bottom-0 right-0 w-16 h-16 bg-black rounded-full">
                                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                                            {{ round($game['rating']) . '%' }}
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="ml-6 lg:ml-12">
                                <a href=""
                                   class="block text-lg text-base font-semibold leading-tight hover:text-white mt-4">
                                    {{ $game['name'] }}
                                </a>
                                <div class="text-white mt-1">
                                    @foreach($game['platforms'] as $platform)
                                        @if(isset($platform['abbreviation']))
                                            {{ $platform['abbreviation'] }}
                                        @endif
                                    @endforeach
                                </div>
                                <p class="text-white hidden lg:block">
                                    {{ $game['summary'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="mx-auto  most-anticipated lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-gray-500 tracking-wide uppercase font-semibold">Most Anticipated</h2>
                <div class="most-anticipated container space-y-10 mt-8">
                    @foreach($mostAnticipated as $game)
                        <div class="game flex">
                            @if(isset($game['cover']))
                                <a href="">
                                    <img src="{{ (Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']))}}"
                                         class="hover:opacity-75 transition ease-in-out duration-150" alt="Game image"/>
                                </a>
                            @endif
                            <div class="ml-5">
                                <a href="" class="hover:text-gray-400">{{ $game['name'] }}</a>
                                <p class="text-white text-sm mt-1">
                                    {{ \Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y') }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <h2 class="text-gray-500 tracking-wide uppercase font-semibold mt-5">Coming Soon</h2>
                <div class="most-anticipated container space-y-10 mt-8">
                    @foreach($comingSoon as $game)
                        <div class="game flex">
                            <a href="">
                                <img src="{{ (Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']))}}"
                                     class="hover:opacity-75 transition ease-in-out duration-150" alt="Game image"/>
                            </a>
                            <div class="ml-5">
                                <a href="" class="hover:text-gray-400">{{ $game['name'] }}</a>
                                <p class="text-white text-sm mt-1">
                                    {{ \Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y') }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
