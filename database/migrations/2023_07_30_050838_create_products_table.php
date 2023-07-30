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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_category_id')->constrained();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('tenor');
            $table->integer('interest_rate')->default(0);
            $table->decimal('min_deposit', 20, 2)->default(0);
            $table->decimal('max_deposit', 20, 2)->default(0);
            $table->boolean('has_early_liquidation_penalty')->default(true);
            $table->decimal('early_liquidation_rate')->default(0);
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
