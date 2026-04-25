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
        Schema::create('opening_adjustments', function (Blueprint $table) {
            $table->id();

            $table->enum('entity_type', ['batch', 'item', 'asset']);
            $table->unsignedBigInteger('entity_id');

            $table->decimal('quantity', 12, 2)->nullable();
            $table->decimal('value', 12, 2)->nullable();

            $table->date('date');

            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opening_adjustments');
    }
};
