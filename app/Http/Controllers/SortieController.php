<?php

namespace App\Http\Controllers;

use App\Models\Sortie;
use App\Http\Requests\StoreSortieRequest;
use App\Http\Requests\UpdateSortieRequest;

class SortieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sorties = Sortie::paginate(10);
        return view('sorties.index', compact('sorties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sorties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSortieRequest $request)
    {
        Sortie::create($request->all());
        return redirect()->route('sorties.index')->with('success', 'Sortie ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sortie $sortie)
    {
        return view('sorties.show', compact('sortie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sortie $sortie)
    {
        return view('sorties.edit', compact('sortie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSortieRequest $request, Sortie $sortie)
    {
        $sortie->update($request->all());
        return redirect()->route('sorties.index')->with('success', 'Sortie modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sortie $sortie)
    {
        $sortie->delete();
        return redirect()->route('sorties.index')->with('success', 'Sortie suprimé avec succès');
    }
}
