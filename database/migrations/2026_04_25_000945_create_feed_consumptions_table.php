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
       Schema::create('feed_consumptions', function (Blueprint $table) {
    $table->id();

    $table->foreignId('batch_id')->constrained()->cascadeOnDelete();
    $table->foreignId('item_id')->constrained()->cascadeOnDelete();

    $table->decimal('quantity', 12, 3);
    $table->decimal('cost', 12, 2);

    $table->date('date')->index();

    $table->enum('reference_type', ['system','opening'])->default('system');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feed_consumptions');
    }
};
