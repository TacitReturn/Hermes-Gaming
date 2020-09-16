@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4">
        <div class="game-details border-b border-gray-800 pb-12 flex">
            <div class="flex-none">
                <img
                    style="width: 120px"
                    src="{{ asset('img/horizon-cover-image.jpg') }}"
                    alt="cover"/>
            </div>
            <div class="ml-12">
                <h2 class="font-semibold text-4xl">Horizon Zero Dawn</h2>
                <div class="text-gray-400">
                    <span>Adventure, RPG</span>
                    &middot;
                    <span>Square Enix</span>
                    &middot;
                    <span>Playstation 4</span>
                </div>
                <div class="flex flex-wrap items-center mt-8 space-x-12">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                90%
                            </div>
                        </div>
                        <div class="ml-4 text-xs">Member <br/> Score</div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                90%
                            </div>
                        </div>
                        <div class="ml-4 text-xs">Critic <br/> Score</div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="" class="hover:text-gray-400">
                                el
                            </a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="" class="hover:text-gray-400">el</a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="" class="hover:text-gray-400">el</a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="" class="hover:text-gray-400">el</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
