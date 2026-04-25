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
       Schema::create('sales', function (Blueprint $table) {
    $table->id();

    $table->foreignId('customer_id')->constrained()->cascadeOnDelete();

    $table->date('date')->index();
    $table->decimal('total', 12, 2);

    $table->timestamps();
});

       Schema::create('sale_items', function (Blueprint $table) {
    $table->id();

    $table->foreignId('sale_id')->constrained()->cascadeOnDelete();
    $table->foreignId('item_id')->constrained()->cascadeOnDelete();

    $table->foreignId('batch_id')->nullable()->constrained()->nullOnDelete();

    $table->decimal('quantity', 12, 3);
    $table->decimal('price', 12, 2);
    $table->decimal('total', 12, 2);

    $table->timestamps();

    $table->index(['item_id','batch_id']);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
        Schema::dropIfExists('sale_items');
    }
};
