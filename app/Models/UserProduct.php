<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProduct extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'product_id',
        'invested_amount',
        'start_at',
        'end_at',
        'closed_at',
        'order_date',
        'approved_date',
        'payment_method',
        'paid',
        'daily_profit_amount',
        'current_profit_amount',
        'previous_profit_amount',
        'previous_balance',
        'current_balance',
        'status',
    ];

    protected $casts = [
        'paid' => 'boolean',
    ];

    protected $dates = [
        'start_at',
        'end_at',
        'closed_at',
        'order_date',
        'approved_date',
    ];

    // Define the relationship with the User model (assuming you have a User model as well)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the Product model (assuming you have a Product model as well)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
