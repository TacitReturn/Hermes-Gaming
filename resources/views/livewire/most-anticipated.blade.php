<div wire:init="loadMostAnticipated" class="most-anticipated container space-y-10 mt-8">
    @forelse($mostAnticipated as $game)
        <div class="game flex">
            @if(isset($game['cover']))
                <a href="{{ route('games.show', $game['slug']) }}">
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
    @empty
        <div id="preloader-markup">
            <div class="d-flex justify-content-center">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    @endforelse
</div>
