<?php

namespace App\Livewire;

use Livewire\Component;

class Joke extends Component
{
    public $joke = "Hewan apa yang paling hening? Semute.";
    
    public $new_joke = "";

    public function save()
    {
        $this->joke = $this->new_joke;
        $this->new_joke = '';
    }

    public function render()
    {
        return view('livewire.joke');
    }
}
