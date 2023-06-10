<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\Log;


class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $usuarios = usuario::all();
        return $usuarios;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $usuario = new usuario();
        $usuario->usuario = $request->usuario;
        $usuario->correo = $request->correo;
        $usuario->contrasena = $request->contrasena;

        $usuario->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = usuario::find($id);
        return $usuario;
    }


    public function getuserbyusername( $username)
    {
        $usuario = usuario::where('usuario', '=', $username)->get();
        return $usuario;
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $usuario = usuario::findOrFail($request->$id);
        $usuario->usuario = $request->usuario;
        $usuario->correo = $request->correo;
        $usuario->contrasena = $request->contrasena;

        $usuario->save();
        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = usuario::destroy($id);
        //
    }
}