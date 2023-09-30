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
        Schema::table('user_wallets', function (Blueprint $table) {
            $table->decimal('demo_balance_before', 20, 2)->default(0);
            $table->decimal('demo_balance_after', 20, 2)->default(0);
            $table->enum('active_account', ['demo', 'live']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_wallets', function (Blueprint $table) {
            $table->dropColumn('demo_balance_before', 'demo_balance_after', 'active_account');
        });
    }
};
