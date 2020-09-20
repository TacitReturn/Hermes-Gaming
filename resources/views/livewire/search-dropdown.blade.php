<div class="relative" x-data="{ isVisible: true} " @click.away="isVisible = false">

    <input
        wire:model="search"
        class="pl-5 bg-gray-800 text-sm px-3 py-1 w-64 focus:outline-none focus:shadow-outline"
        placeholder="(Press '/' to focus)"
        type="text"
        x-ref="search"
        @focus="isVisible = true"
        @keydown.escape.window="isVisible = false"
        @keydown="isVisible = true"
        @keydown.shift.tab="isVisible = false"
        @keydown.window="
                        if (event.keyCode === 191)
                        {
                        event.preventDefault();
                        $refs.search.focus();
                        }"

    >
    <div class="absolute top-0 flex items-center h-full ml-2">
        <svg class="fill-current text-gray-400 w-4" viewBox="0 0 24 24">
            <path class="heroicon-ui"
                  d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/>
        </svg>
    </div>

    {{--    <div wire:loading class="spinner-border top-0 right-0 mr-4"--}}
    {{--         style="position: absolute;">--}}
    {{--    </div>--}}

    @if(strlen($search) >= 2)
        <div x-show.transition.opacity.duration.1000="isVisible" class="absolute z-50 bg-gray-800 text-xs rounded w-64 mt-2">

            @if(count($searchResults) > 0)
                <ul>
                    @foreach($searchResults as $game)
                        <li class="border-b border-gray-700">
                            <a @if($loop->last)
                               @keydown.tab="isVisible = false"
                               @endif
                               href="{{ route('games.show', $game['slug']) }}"
                               class="block hover:bg-gray-700 flex items-center transition ease-in-out duration-150 px-3 py-3">
                                @if(isset($game['cover']))
                                    <img
                                        class="w-20"
                                        src="{{ Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']) }}"
                                        alt="cover">
                                @endif
                                <span class="ml-4">{{ $game['name'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="px-4 py-4">No results for {{ $search }}</div>
            @endif
        </div>
    @endif
</div>
