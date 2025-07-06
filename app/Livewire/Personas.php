<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Model\Persona;

class Personas extends Component
{
    public function mount()
    {
        $this->personas = Persona::all();
    }
    
    public function render()
    {
        return view('livewire.personas');
    }
}
