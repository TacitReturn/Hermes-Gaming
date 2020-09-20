<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';
    public $searchResults = [];

    public function render()
    {
        $before = Carbon::now()->subMonths(6)->timestamp;
        $after = Carbon::now()->addMonths(6)->timestamp;

        if (strlen($this->search) >= 2)
        {
            $this->searchResults = Http::withHeaders(config('services.igdb'))
                ->withOptions([
                    'body' => "
                          search \"{$this->search}\";
                          fields name, slug, cover.url;
                          limit 5;
                          "
                ])->get('https://api-v3.igdb.com/games/')
                ->json();
        }

        return view('livewire.search-dropdown');
    }
}
