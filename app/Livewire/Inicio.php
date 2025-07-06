<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Taller;

class Inicio extends Component
{
    public $talleres;

    public function mount()
    {
        $this->talleres = Taller::all();
    }

    public function render()
    {
        return view('livewire.inicio');
    }
}
