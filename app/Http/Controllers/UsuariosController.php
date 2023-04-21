<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function buscar(Request $request)
    {
        $q = $request->input('q');

        $usuarios = Usuario::where('remitente', 'LIKE', "%$q%")
                            ->orWhere('latitud', 'LIKE', "%$q%")
                            ->orWhere('longitud', 'LIKE', "%$q%")
                            ->get();

        return view('usuarios.index', compact('usuarios'));
    }

}
