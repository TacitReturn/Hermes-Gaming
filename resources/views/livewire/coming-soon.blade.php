<div wire:init="loadComingSoon" class="most-anticipated container space-y-10 mt-8">
    @foreach($comingSoon as $game)
        <div class="game flex">
            <a href="">
                <img
                    src="{{ (Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']))}}"
                    class="hover:opacity-75 transition ease-in-out duration-150"
                    alt="Game image"/>
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
