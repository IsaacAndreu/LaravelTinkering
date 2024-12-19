<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;

class SeriesController extends Controller
{
    /**
     * Mostra un llistat de les sèries.
     */
    public function index()
    {
        $series = Series::all();
        return view('series.index', compact('series'));
    }

    /**
     * Mostra el formulari per crear una nova sèrie.
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Emmagatzema una nova sèrie a la base de dades.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titol' => 'required',
            'descripcio' => 'required',
            'temporades' => 'required|integer',
            'any_inici' => 'required|integer',
            'creador' => 'required',
        ]);

        Series::create($request->all());
        return redirect()->route('series.index')->with('success', 'Sèrie creada correctament.');
    }

    /**
     * Mostra una sèrie específica.
     */
    public function show(Series $series)
    {
        return view('series.show', compact('series'));
    }

    /**
     * Mostra el formulari per editar una sèrie existent.
     */
    public function edit(Series $series)
    {
        return view('series.edit', ['series' => $series]);
    }

    /**
     * Actualitza una sèrie a la base de dades.
     */
    public function update(Request $request, Series $series)
    {
        $request->validate([
            'titol' => 'required',
            'descripcio' => 'required',
            'temporades' => 'required|integer',
            'any_inici' => 'required|integer',
            'creador' => 'required',
        ]);

        $series->update($request->all());
        return redirect()->route('series.index')->with('success', 'Sèrie actualitzada correctament.');
    }

    /**
     * Elimina una sèrie de la base de dades.
     */
    public function destroy(Series $series)
    {
        $series->delete();
        return redirect()->route('series.index')->with('success', 'Sèrie eliminada correctament.');
    }
}
