<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('personal_expenses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')
                  ->constrained('personal_categories')
                  ->cascadeOnDelete();

            $table->decimal('amount', 12, 2);

            $table->date('date')->index();

            $table->text('notes')->nullable();

            $table->timestamps();

            $table->index(['category_id','date']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('personal_expenses');
    }
};