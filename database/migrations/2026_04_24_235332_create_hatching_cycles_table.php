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
        Schema::create('hatching_cycles', function (Blueprint $table) {
            $table->id();

            $table->date('start_date');
            $table->date('end_date')->nullable();

            $table->integer('eggs_input')->nullable();
            $table->integer('eggs_hatched')->nullable();
            $table->decimal('hatch_rate', 5, 2)->nullable();

            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hatching_cycles');
    }
};
