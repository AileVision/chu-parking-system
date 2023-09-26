<?php

namespace Database\Seeders;

use App\Models\Entree;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EntreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Entree::factory(5)->create();
    }
}
