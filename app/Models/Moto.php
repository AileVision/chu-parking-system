<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    use HasFactory;

    protected $fillable = [
        'immatriculation',
        'tel_proprietaire'
    ];
    
    public function entries(){
        return $this->hasMany(Entree::class);
    }

    public function sorties(){
        return $this->hasMany(Sortie::class);
    }
    
    public function archivedTichets(){
        return $this->hasMany(ArchivedTicket::class);
    }
}
