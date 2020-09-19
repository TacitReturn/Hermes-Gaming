<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PopularGames extends Component
{
    public $popularGames = [];

    public function loadPopularGames()
    {
        $before = Carbon::now()->subMonths(6)->timestamp;
        $after = Carbon::now()->addMonths(6)->timestamp;

        $this->popularGames = Http::withHeaders(config('services.igdb'))
            ->withOptions([
                'body' => "
                          fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating, slug;
                          where platforms = (48,49,130,6)
                          & ( first_release_date >= {$before}
                           & first_release_date < {$after});
                          sort popularity desc;
                          limit 12;
                          "
            ])->get('https://api-v3.igdb.com/games/')
            ->json();

    }

    public function render()
    {
        return view('livewire.popular-games');
    }
}
