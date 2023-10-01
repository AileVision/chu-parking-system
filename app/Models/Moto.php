<?php

namespace App\Models;

use App\Events\NouvelleMotoCree;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Moto extends Model
{
    use HasFactory;

    protected $fillable = [
        'immatriculation',
        'tel_proprietaire'
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($moto) {
            event(new NouvelleMotoCree($moto));
        });
    }
    
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
