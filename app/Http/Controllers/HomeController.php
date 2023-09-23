<?php

namespace App\Http\Controllers;

use App\Models\Entree;
use App\Models\Sortie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        $totalEntrees = Entree::all()->count();
        $totalSorties = Sortie::all()->count();

        return view('dashboard', compact(['totalEntrees', 'totalSorties']));
    }
}
