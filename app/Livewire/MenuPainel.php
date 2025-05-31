<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MenuPainel extends Component
{
    public function render()
    {
        return view('livewire.menu-painel');
    }
    public function logout(){
        Auth::logout();
        $this->redirect('/');
    }
}
