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
        $user = User::find(Auth::id());

        // Get the current date and time
        $now = Carbon::now();

        // Get the total number of days in the current month
        $totalDaysInMonth = $now->daysInMonth;

        // Get the current day of the month
        $currentDay = $now->day;

        $currentMonthProfitSum = $user->investments->where('active_account', $user->wallet->active_account)->sum('daily_profit_amount') * $currentDay;

        $products = Product::all();
        $investments = $user->investments->where('status', 'active')->where('active_account', $user->wallet->active_account);

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

    public function submitTopUpRequest(Request $request)
    {
        // return redirect()->back();
        return back()->with('success', 'Request Submitted Successfully, we will review & confirm your payment');
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

    public function topupBalancePage()
    {
        if (isset($_GET['plan-iv'])) {
            $id = $_GET['plan-iv'];
        }

        // Get user
        $user = Auth::user();

        // Get current investment product
        $productCategory = ProductCategory::all();

        return view('dashboard.account-topup', compact('user', 'productCategory'));
    }
}
