<div wire:init="loadPopularGames"
     class="pupular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16 ">
    @forelse($popularGames as $game)
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="{{ route('games.show', $game['slug']) }}">
                    <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}"
                         class="hover:opacity-75 transition ease-in-out duration-150" alt="cover"/>
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
            <a href="{{ route('games.show', $game['slug']) }}" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                {{ $game['name'] }}
            </a>
            <div class="text-gray-400 mt-1">
                @foreach($game['platforms'] as $platform)
                    @if(isset($platform['abbreviation']))
                        {{ $platform['abbreviation'] }}
                    @endif
                @endforeach
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
