<?php

namespace Database\Seeders;

use App\Models\ArchivedTicket;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArchivedTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArchivedTicket::factory(5)->create();
    }
}
