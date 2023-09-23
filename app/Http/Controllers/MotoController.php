<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use App\Http\Requests\StoreMotoRequest;
use App\Http\Requests\UpdateMotoRequest;

class MotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motos = Moto::all();
        // dd($motos);
        return view('motos.index', compact('motos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('motos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMotoRequest $request)
    {
        Moto::create($request->all());

        return redirect()->route('motos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Moto $moto)
    {
        return view('motos.show', compact('moto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Moto $moto)
    {
        return view('motos.edit', compact('moto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMotoRequest $request, Moto $moto)
    {
        $moto->update($request->all());

        return redirect()->route('motos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Moto $moto)
    {
        $moto->delete();

        return redirect()->route('motos.index');
    }
}
