<?php

namespace App\Livewire;

use Livewire\Component;

class CadastroAlunos extends Component
{

    public $nome;
    public $telefone;
    public $email;
    public $cep;

    public function render()
    {
        return view('livewire.cadastro-alunos');
    }
}
