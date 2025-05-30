<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login(){
        
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $autenticated = Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        if(!$autenticated){
            return session()->flash('error','Login ou senha inválidos');
        }

        $this->redirect('/painel');

    }

    public function render()
    {
        return view('livewire.login');
    }
}
