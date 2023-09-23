<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('archived_tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('moto_id')->constrained()->onDelete('cascade');
            $table->dateTime('entree_datetime');
            $table->dateTime('sortie_datetime')->nullable();
            $table->foreignId('ticket_id')->constrained();
            $table->decimal('total_amount', 10, 2);
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archived_tickets');
    }
};
