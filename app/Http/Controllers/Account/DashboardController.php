<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\UserProduct;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $currentMonth = Carbon::now()->startOfMonth();
        $currentMonthEnd = Carbon::now()->endOfMonth();

        $currentMonthProfitSum = UserProduct::where('status', 'running')
            ->whereBetween('start_at', [$currentMonth, $currentMonthEnd])
            ->sum('current_profit_amount');

        $user = User::find(Auth::id());
        $products = Product::all();
        $investments = UserProduct::all();
        return view('dashboard.index', compact('user', 'products', 'currentMonthProfitSum', 'investments'));
    }
}
