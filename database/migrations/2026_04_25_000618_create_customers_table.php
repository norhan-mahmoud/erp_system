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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('facebook_profile_url')->nullable();
            $table->string('other_url')->nullable();
            $table->decimal('opening_balance', 12, 2)->default(0);
            $table->enum('balance_type', ['credit', 'debit', 'none'])->default('none');

            $table->timestamps();
        });
        Schema::create('customer_addresses',function(Blueprint $table){
            $table->foreignId('customer_id')->constrained()->cascadeOnDelete();
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
