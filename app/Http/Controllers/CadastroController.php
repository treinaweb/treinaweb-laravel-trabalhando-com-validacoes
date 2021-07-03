<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CadastroController extends Controller
{
    public function store()
    {
        $validacao = Validator::make(
            [
                "curso" => "PHP",
                
            ],
            [
                "curso" => ['required', 'max:100'],
                "carga" => ['required', 'integer']
            ]
        );

        if($validacao->fails()) {
            dd('a validação falhou!');
        }

        dd('cheguei aqui');
    }
}
