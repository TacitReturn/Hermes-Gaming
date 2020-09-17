@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-gray-500 uppercase tracking-wide font-semibold">Popular Game</h2>
        <livewire:popular-games>
        <div class="flex flex-col lg:flex-row m-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 w-3/4 lg:mr-32">
                <h2 class="text-gray-500 tracking-wide uppercase font-semibold">Recently Reviewed</h2>
                <livewire:recently-reviewed>
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
