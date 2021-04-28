<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $search = '';

    
    public function render(){

    $searchResults = [];

    if (strlen($this->search) >= 1) {
        $searchResults = Http::get('http://ws.audioscrobbler.com/2.0/?method=album.search&album='.$this->search.'&api_key=915e43bd2c345fdb1aa3e2c00aca0c03&format=json')
            ->json()['results']['albummatches']['album'];
    }
    
    /*dump($searchResults);*/

    return view('livewire.search-dropdown',[
        'searchResults' => collect($searchResults)->take(5),
    ]);
    }
}