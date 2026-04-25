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
        Schema::create('batches', function (Blueprint $table) {
            $table->id();

            $table->string('code')->nullable()->index();

            $table->enum('source_type', ['purchase','hatching','opening'])->default('opening');
            $table->boolean('is_opening')->default(false)->index();

            $table->date('start_date')->nullable()->index();
            $table->date('opening_date')->nullable();

            $table->unsignedInteger('initial_quantity');
            $table->unsignedInteger('current_quantity');

            $table->decimal('opening_cost', 12, 2)->nullable();

            $table->enum('status', ['active','closed'])->default('active')->index();
            $table->text('notes')->nullable();

            $table->timestamps();
        });

        Schema::create('batch_events', function (Blueprint $table) {
            $table->id();

            $table->foreignId('batch_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->enum('type', ['death','sale','transfer','adjust']);
            $table->unsignedInteger('quantity');

          
            $table->nullableMorphs('reference');

            $table->date('date')->index();
            $table->text('notes')->nullable();

            $table->timestamps();

            $table->index(['batch_id','type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batches');
        Schema::dropIfEwists('batch_events');
    }
};
