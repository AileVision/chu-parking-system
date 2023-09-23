<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'entree_id',
        'sortie_id',
        'ticket_number',
        'entree_datetime',
        'sortie_datetime',
        'total_amount',
        'status'
    ];

    public function entree(){
        return $this->belongsTo(Entree::class);
    }

    public function sortie(){
        return $this->belongsTo(Sortie::class);
    }

    
    
}
