<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use App\Models\Entree;
use App\Models\Sortie;
use App\Http\Requests\StoreSortieRequest;
use App\Http\Requests\UpdateSortieRequest;
use Carbon\Carbon;
use PhpParser\Node\Stmt\ElseIf_;

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
    public function create( Moto $moto)
    {
        $entree = Entree::where('moto_id', $moto->id)->first();

        $entree_datetime = Carbon::parse($entree->entree_datetime);
        $sortie_datetime = Carbon::parse(now());
        $total_duree = $sortie_datetime->diffInHours($entree_datetime);
        // nombre de tranches

        $nombre_tranche = $total_duree / 24;
        // montant total à payer
        $total_amount =  intdiv($total_duree, 24) * 50;

      
        if ($nombre_tranche < 1) {
            $total_amount = 50;
        } elseif ($total_duree % 1440 != 0) {
            $total_amount += 50;
        }
        
        return view('sorties.create', compact(['moto', 'entree', 'total_amount']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSortieRequest $request)
    {
        dd('infos sauvegardée');
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
