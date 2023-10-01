<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use App\Models\Entree;
use App\Models\Sortie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        $totalEntrees = Entree::all()->count();
        $totalSorties = Sortie::all()->count();

        $motos = Moto::orderBy('id', 'desc')->paginate(20);

        return view('dashboard', compact(['totalEntrees', 'totalSorties', 'motos']));
    }
}
