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
                Schema::create('stock_movements', function (Blueprint $table) {
            $table->id();

            $table->foreignId('item_id')->constrained()->cascadeOnDelete();
            $table->foreignId('warehouse_id')->constrained()->cascadeOnDelete();

            $table->enum('type', ['in','out']);
            $table->decimal('quantity', 12, 3);

            $table->decimal('unit_cost', 12, 2)->nullable();

            $table->nullableMorphs('reference');

            $table->boolean('is_opening')->default(false)->index();

            $table->date('date')->index();

            $table->timestamps();

            $table->index(['item_id','date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_movements');
    }
};
