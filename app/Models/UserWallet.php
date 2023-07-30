<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'wallet_id',
        'currency',
        'balance_before',
        'balance_after',
        'status',
    ];

    // If the table doesn't follow Laravel's naming convention, you can specify the table name explicitly
    // protected $table = 'user_wallets';

    // Define the relationship with the User model (assuming you have a User model as well)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
