<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sortie extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'moto_id',
        'ticket_number',
        'sortie_datetime',
        'total_amount'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function moto(){
        return $this->belongsTgo(Moto::class);
    }

    public function ticket(){
        return $this->hasOne(Ticket::class);
    }
}
