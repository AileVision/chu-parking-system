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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entree_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('sortie_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('ticket_number');
            $table->dateTime('entree_datetime');
            $table->dateTime('sortie_datetime')->nullable();
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
        Schema::dropIfExists('tickets');
    }
};
