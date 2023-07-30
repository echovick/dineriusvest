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
        Schema::create('user_product_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('user_product_id')->constrained();
            $table->string('type');
            $table->string('narration');
            $table->decimal('amount', 20, 2)->default(0);
            $table->decimal('balance_before_charge', 20, 2)->default(0);
            $table->decimal('balance_after_charge', 20, 2)->default(0);
            $table->enum('charge_type', ['debit', 'credit']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_product_transactions');
    }
};
