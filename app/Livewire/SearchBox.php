<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBox extends Component
{
    public $searchTerm = '';

    public function searchPosts()
    {
        $this->dispatch('search', searchTerm: $this->searchTerm);
    }

    public function render()
    {
        return view('livewire.search-box');
    }
}
