<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    /**
     * Mostra un llistat de les pel·lícules.
     */
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('peliculas.index', compact('peliculas'));
    }

    /**
     * Mostra el formulari per crear una nova pel·lícula.
     */
    public function create()
    {
        return view('peliculas.create');
    }

    /**
     * Emmagatzema una nova pel·lícula a la base de dades.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titol' => 'required',
            'descripcio' => 'required',
            'any' => 'required|integer',
            'director' => 'required',
        ]);

        Pelicula::create($request->all());
        return redirect()->route('peliculas.index')->with('success', 'Pel·lícula creada correctament.');
    }

    /**
     * Mostra una pel·lícula específica.
     */
    public function show(Pelicula $pelicula)
    {
        return view('peliculas.show', compact('pelicula'));
    }

    /**
     * Mostra el formulari per editar una pel·lícula existent.
     */
    public function edit(Pelicula $pelicula)
    {
        return view('peliculas.edit', [
            'pelicula' => $pelicula,
            'editMode' => true, // Afegeix aquesta variable
        ]);
    }

    /**
     * Actualitza una pel·lícula a la base de dades.
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        $request->validate([
            'titol' => 'required',
            'descripcio' => 'required',
            'any' => 'required|integer',
            'director' => 'required',
        ]);

        $pelicula->update($request->all());
        return redirect()->route('peliculas.index')->with('success', 'Pel·lícula actualitzada correctament.');
    }

    /**
     * Elimina una pel·lícula de la base de dades.
     */
    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();
        return redirect()->route('peliculas.index')->with('success', 'Pel·lícula eliminada correctament.');
    }
}
