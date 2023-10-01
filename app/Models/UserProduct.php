<?php

namespace App\Models;

use Carbon\Carbon;
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
        'active_account',
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

    public function productTransactions()
    {
        return $this->hasMany(UserProductTransaction::class);
    }

    public function sync()
    {
        try {
            // Check if end date have reached, then first of all turn the product to inactive
            $endDate = Carbon::parse($this->end_at);
            $currentDate = Carbon::now();

            // dd('here');
            if ($currentDate->greaterThanOrEqualTo($endDate)) {
                // Product have expired
                $this->status = 'inactive';
                $this->closed_at = Carbon::now();
                $this->save();

                $this->updateProfitsAndBalances($endDate);

                return true;
            } else {
                // dd('here');
                $this->updateProfitsAndBalances();

                return true;
            }
        } catch (\Exception $e) {
            return false;
        }
    }

    public function updateProfitsAndBalances($endDate = '')
    {
        if (empty($endDate)) {
            $endDate = Carbon::now();
        }

        // Assign current profit amount to previuos profit amount
        $this->previous_profit_amount = $this->current_profit_amount;

        // Calculate new profit amount [Total profit earned so far]
        $createdAt = Carbon::parse($this->created_at);

        // Calculate the difference in days
        $numberOfDays = $createdAt->diffInDays($endDate);

        $totalProfitEarnedSofar = $numberOfDays * $this->daily_profit_amount;

        $this->current_profit_amount = $totalProfitEarnedSofar;

        /**
         * Process Balances
         */
        // Assign current balance to previous balance
        $this->previous_balance = $this->current_balance;
        $this->current_balance = $this->invested_amount + $totalProfitEarnedSofar;

        $this->save();
    }
}
