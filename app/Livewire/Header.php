<?php

namespace App\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $showHamburguerMenu = false;

    public function handleShowHamburguerMenu()
    {
        $this->showHamburguerMenu = !$this->showHamburguerMenu;
    }

    public function render()
    {
        return view('livewire.header');
    }
}
