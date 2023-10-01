<?php

namespace App\Http\Controllers;

use App\Models\Entree;
use App\Http\Requests\StoreEntreeRequest;
use App\Http\Requests\UpdateEntreeRequest;

class EntreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrees = Entree::paginate(10);
        return view('entrees.index', compact('entrees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entrees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEntreeRequest $request)
    {
        // Entree::create($request->all());
        // return redirect()->route('entrees.index')->with('success', 'Entrée ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Entree $entree)
    {
        
        return view('entrees.show', compact('entree'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entree $entree)
    {
        return view('entrees.edit', compact('entree'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntreeRequest $request, Entree $entree)
    {
        $entree->update($request->all());
        return redirect()->route('entrees.index')->with('success', 'Entrée modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entree $entree)
    {
        $entree->delete();
        return redirect()->route('entrees.index')->with('success', 'Entrée suprimé avec succès');
    }
}
