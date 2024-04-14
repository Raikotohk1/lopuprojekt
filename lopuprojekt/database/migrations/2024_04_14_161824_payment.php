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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dancer_id');
            $table->decimal('price', 8, 2); // Assuming 8 digits in total and 2 decimal places
            $table->date('date');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('dancer_id')->references('id')->on('dancers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
