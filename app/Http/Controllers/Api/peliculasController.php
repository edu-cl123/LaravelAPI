<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\peliculas;

class peliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            //
            $peliculas = peliculas::all();
            return $peliculas;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelicula = new peliculas();
        $pelicula-> nombre = $request->nombre;
        $pelicula->director = $request->director;
        $pelicula->genero = $request->genero;
        $pelicula->ano = $request->ano;
        $pelicula->guion = $request->guion;
        $pelicula->id_usuario = $request->id_usuario;

        $pelicula->save();
        return 1;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelicula=peliculas::find($id);
        return $pelicula;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pelicula=peliculas::findOrFail($id);

        $pelicula-> nombre = $request->nombre;
        $pelicula->director = $request->director;
        $pelicula->genero = $request->genero;
        $pelicula->ano = $request->ano;
        $pelicula->guion = $request->guion;
        $pelicula->id_usuario = $request->id_usuario;

        $pelicula->save();
        return $pelicula;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pelicula=peliculas::destroy($id);
    }
}
