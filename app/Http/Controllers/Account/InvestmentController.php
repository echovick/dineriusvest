<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\UserProduct;
use Carbon\Carbon;

class InvestmentController extends Controller
{
    public function index()
    {
        $currentMonth = Carbon::now()->startOfMonth();
        $currentMonthEnd = Carbon::now()->endOfMonth();

        $allUserInvestments = UserProduct::all();
        $allActiveUserInvestments = UserProduct::where('status', 'running')->get();

        $userActiveInvestmentsThisMonth = UserProduct::where('status', 'running')
            ->whereBetween('start_at', [$currentMonth, $currentMonthEnd])
            ->get();
        $allUserInvestmentsThisMonth = UserProduct::whereBetween('start_at', [$currentMonth, $currentMonthEnd])
            ->get();

        $todayStart = Carbon::now()->startOfDay();
        $todayEnd = Carbon::now()->endOfDay();

        $todayProfitSum = UserProduct::where('status', 'active')
            ->whereBetween('start_at', [$todayStart, $todayEnd])
            ->sum('current_profit_amount');

        return view('dashboard.user-investments', compact('allUserInvestments', 'allActiveUserInvestments', 'userActiveInvestmentsThisMonth', 'allUserInvestmentsThisMonth', 'todayProfitSum'));
    }
}
