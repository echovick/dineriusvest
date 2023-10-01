<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProductTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_product_id',
        'type',
        'narration',
        'amount',
        'balance_before_charge',
        'balance_after_charge',
        'charge_type',
        'active_account',
        'created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userProduct()
    {
        return $this->belongsTo(UserProduct::class);
    }
}
