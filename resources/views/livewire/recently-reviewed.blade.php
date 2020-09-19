<div wire:init="loadRecentlyReviewed" class="recently-reviewed-container space-y-12 mt-8">
    @forelse($recentlyReviewed as $game)
        <div
            class="game bg-black hover:bg-orange-700 transition duration-1000 rounded-lg shadow-md flex px-6 py-6">
            <div class="relative flex-none">
                <a href="{{ route('games.show', $game['slug']) }}">
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
