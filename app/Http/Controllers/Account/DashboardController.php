<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use App\Models\UserProduct;
use App\Models\UserWallet;
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

        // Product Categories
        $productCategory = ProductCategory::all();

        return view('dashboard.index', compact('user', 'products', 'currentMonthProfitSum', 'investments', 'productCategory'));
    }

    public function toggleActiveAccount(Request $request)
    {
        // Get wallet id
        $walletId = $request->wallet_id;

        // Update wallet
        UserWallet::where('id', $walletId)->update(['active_account' => $request->active_account]);

        return redirect()->back();
    }

    public function refreshDemoBalance(Request $request)
    {
        // Get authenticated user
        $user = Auth::user();

        // Get user wallet
        $wallet = $user->wallet;

        // Update demo wallet balance
        $wallet->demo_balance_before = $wallet->demo_balance_after;
        $wallet->demo_balance_after = 10000.00;
        $wallet->save();

        return redirect()->back();
    }
}
