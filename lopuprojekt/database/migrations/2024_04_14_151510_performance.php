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
        Schema::create('your_uritus', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('location');
            $table->time('time');
            $table->decimal('price', 8, 2); // assuming 8 digits in total and 2 decimal places
            $table->decimal('performance_fee', 8, 2);
            $table->unsignedBigInteger('routine_id'); // assuming routine_id is a foreign key
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('routine_id')->references('id')->on('routines')->onDelete('cascade');
        });  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('your_uritus');
    }
};
