@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-gray-500 uppercase tracking-wide font-semibold">Popular Game</h2>
        <livewire:popular-games />
            <div class="flex flex-col lg:flex-row m-10">
                <div class="recently-reviewed w-full lg:w-3/4 mr-0 w-3/4 lg:mr-32">
                    <h2 class="text-gray-500 tracking-wide uppercase font-semibold">Recently Reviewed</h2>
                    <livewire:recently-reviewed />
                </div>
                <div class="mx-auto  most-anticipated lg:w-1/4 mt-12 lg:mt-0">
                    <h2 class="text-gray-500 tracking-wide uppercase font-semibold">Most Anticipated</h2>
                    <livewire:most-anticipated />
                        <h2 class="text-gray-500 tracking-wide uppercase font-semibold mt-5">Coming Soon</h2>
                    <livewire:coming-soon />
                </div>
            </div>
    </div>
@endsection
