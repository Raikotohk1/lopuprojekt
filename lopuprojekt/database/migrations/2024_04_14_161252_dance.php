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
        Schema::create('dances', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('routine_id');
            $table->unsignedBigInteger('costume1_id')->nullable();
            $table->unsignedBigInteger('costume2_id')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('routine_id')->references('id')->on('routines')->onDelete('cascade');
            $table->foreign('costume1_id')->references('id')->on('costumes')->onDelete('set null');
            $table->foreign('costume2_id')->references('id')->on('costumes')->onDelete('set null');
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dances');
    }
};
