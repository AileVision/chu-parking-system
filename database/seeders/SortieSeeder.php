<?php

namespace Database\Seeders;

use App\Models\Sortie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SortieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sortie::factory(20)->create();
    }
}
