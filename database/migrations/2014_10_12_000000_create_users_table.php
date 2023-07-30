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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->integer('otp')->nullable();
            $table->dateTime('otp_expires_at')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('status')->default('active');
            $table->string('referral_code')->nullable();
            $table->foreignId('referred_by')->nullable()->constrained('users','id');
            $table->decimal('all_time_referral_earnings', 20, 2)->default(0);
            $table->decimal('current_referral_earnings', 20, 2)->default(0);
            $table->enum('type', ['customer', 'admin'])->default('customer');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
