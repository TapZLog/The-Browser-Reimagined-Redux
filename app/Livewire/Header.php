<?php

namespace App\Livewire;

use Livewire\Component;

class Header extends Component
{
    public int $number = 0;

    public function test()
    {
        $this->number += 1;
    }

    public function render()
    {
        return view('livewire.header');
    }
}
