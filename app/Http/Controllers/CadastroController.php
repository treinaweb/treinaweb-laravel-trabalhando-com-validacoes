<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CadastroController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "curso" => ['required', 'max:100'],
            "carga" => ['required', 'integer']
        ]);

        // Validator::make($request->except('_token'),
        //     [
        //         "curso" => ['required', 'max:100'],
        //         "carga" => ['required', 'integer']
        //     ]
        // )->validate();

        dd('cheguei aqui');
    }
}
