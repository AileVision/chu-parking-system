<?php

namespace App\Listeners;

use App\Models\Entree;
use App\Events\NouvelleMotoCree;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreerEntreePourNouvelleMoto
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NouvelleMotoCree $event): void
    {
        // Créez une nouvelle entrée dans la table "entrées"

        Entree::create([
            'user_id' => auth()->id(),
            'moto_id' => $event->moto->id,
            'entree_datetime' => now(),
            'ticket_number' => uniqid()
        ]);
    }
}
