<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CadastroController extends Controller
{
    public function store(CursoRequest $request)
    {
        // $request->validate([
        //     "curso" => ['required', 'max:100'],
        //     "carga" => ['required', 'integer']
        // ]);

        // Validator::make($request->except('_token'),
        //     [
        //         "curso" => ['required', 'max:100'],
        //         "carga" => ['required', 'integer']
        //     ]
        // )->validate();

        dd($request->all());
    }

    public function storeApi(Request $request)
    {
        // $validacao = Validator::make(
        //     $request->all(),
        //     [
        //         "curso" => ['required', 'max:100'],
        //         "carga" => ['required', 'integer']
        //     ]
        // );

        // if ($validacao->fails()) {
        //     $mensagemErros = $validacao->errors();

        //     return $mensagemErros->all();
        // }

        $request->validate([
            "curso" => ['required', 'max:100'],
            "carga" => ['required', 'integer']
        ]);

        var_dump('Passou na validação');
    }
}
