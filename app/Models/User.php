<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Helpers\Helper;
use App\Helpers\WalletIdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'status',
        'email',
        'password',
        'otp',
        'otp_expires_at',
        'referral_code',
        'referred_by',
        'all_time_referral_earnings',
        'current_referral_earnings',
        'type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'otp',
        'otp_expires_at'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function profile()
    {
        return $this->hasOne(UserMetaData::class);
    }

    public function wallet()
    {
        return $this->hasOne(UserWallet::class);
    }

    public function notifications()
    {
        return $this->hasOne(UserNotification::class);
    }

    public function investments()
    {
        return $this->hasMany(UserProduct::class);
    }

    public function investmentTransactions()
    {
        return $this->hasOne(UserProductTransaction::class);
    }

    public function createWallet(){
        // Check if the UserWallet already exists for the user
        $userWallet = $this->wallet;

        if (!$userWallet) {
            // Create UserWallet if it doesn't exist
            $walletId = $this->generateWalletId();
            $this->wallet()->create(['wallet_id' => $walletId, 'currency' => "USD"]);
        }
    }

    /**
     * Generate a unique wallet ID.
     *
     * @return string
     */
    private function generateWalletId()
    {
        return Uuid::uuid4()->toString();
    }

        /**
     * Create a unique referral code for the user.
     *
     * @return string
     */
    public function generateReferralCode()
    {
        // Generate a random alphanumeric string of length 8
        $referralCode = Str::random(8);

        // Check if the generated code already exists in the database
        while (self::where('referral_code', $referralCode)->exists()) {
            // If the code exists, generate a new one
            $referralCode = Str::random(8);
        }

        // Save the referral code to the user
        $this->referral_code = strtoupper($referralCode);
        $this->save();

        return $referralCode;
    }

    public function referrals()
    {
        return $this->hasMany(User::class, 'referred_by');
    }
}
