@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-gray-500 uppercase tracking-wide font-semibold">Popular Game</h2>
        <div class="pupular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="">
                        <img class="hover:opacity-75 transition ease-in-out duration-150" src="" alt="Game image" />
                    </a>
                    <div class="absolute">

                    </div>
                </div>
                <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">
                    Playstation 4
                </div>
            </div>
        </div>
    </div>
@endsection
