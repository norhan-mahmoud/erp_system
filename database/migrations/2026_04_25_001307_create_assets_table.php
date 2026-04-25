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
        Schema::create('assets', function (Blueprint $table) {
    $table->id();

    $table->string('name');

    $table->decimal('purchase_value', 12, 2);
    $table->decimal('salvage_value', 12, 2)->default(0);

    $table->unsignedInteger('useful_life_months');

    $table->date('purchase_date');
    $table->date('start_date');

    $table->decimal('accumulated_depreciation', 12, 2)->default(0);

    $table->boolean('is_opening')->default(false);

    $table->timestamps();
});
        Schema::create('asset_depreciations', function (Blueprint $table) {
    $table->id();
    $table->foreignId('asset_id')->constrained()->cascadeOnDelete();

    $table->string('month'); // YYYY-MM
    $table->decimal('value', 12, 2);

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
        Schema::dropIfExists('asset_depreciations');

    }
};
