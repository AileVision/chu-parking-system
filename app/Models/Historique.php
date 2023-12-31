<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'action',
        'action_datetime',
        'details'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
