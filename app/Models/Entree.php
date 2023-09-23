<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entree extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'moto_id',
        'entree_datetime',
        'ticket_number'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function moto(){
        return $this->belongsTo(Moto::class);
    }

    public function ticket(){
        return $this->hasOne(Ticket::class);
    }
}
