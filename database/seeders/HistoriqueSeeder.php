<?php

namespace Database\Seeders;

use App\Models\Historique;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HistoriqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Historique::factory(20)->create();
    }
}
