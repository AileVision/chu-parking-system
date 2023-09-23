<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchivedTicket extends Model
{
    use HasFactory;

    protected $fillable = [
        'moto_id',
        'entree_datetime',
        'ticket_datetime',
        'ticket_id',
        'total_amount',
        'status'
    ];

    public function moto(){
        return $this->belongsTgo(Moto::class);
    }
    
}
