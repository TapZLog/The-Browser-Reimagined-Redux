<?php

namespace App\Livewire;

use Livewire\Component;

class Main extends Component
{
    public $headline = "Comelec division declares Benny Abante Manila 6th District congressman";
    public $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation";
    public $date = "04/20/2069 11:11:69";

    public function render()
    {
        return view('livewire.main');
    }
}
