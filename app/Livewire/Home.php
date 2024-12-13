<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function redirectToAuth($route)
    {
        return redirect()->route($route);
    }

    public function render()
    {
        return view('livewire.home');
    }
}