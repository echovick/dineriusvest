<?php

use Carbon\Carbon;
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
        Schema::create('user_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->decimal('invested_amount', 20, 2)->default(0);
            $table->dateTime('start_at')->nullable();
            $table->dateTime('end_at')->nullable();
            $table->dateTime('closed_at')->nullable();
            $table->dateTime('order_date')->default(Carbon::now());
            $table->dateTime('approved_date')->default(Carbon::now());
            $table->string('payment_method')->nullable();
            $table->boolean('paid')->default(false);
            $table->decimal('daily_profit_amount', 20, 2)->default(0);
            $table->decimal('current_profit_amount', 20, 2)->default(0);
            $table->decimal('previous_profit_amount', 20, 2)->default(0);
            $table->decimal('previous_balance', 20, 2)->default(0);
            $table->decimal('current_balance', 20, 2)->default(0);
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_products');
    }
};
