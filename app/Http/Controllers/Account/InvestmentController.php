<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\UserProduct;
use App\Models\UserProductTransaction;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestmentController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function index()
    {
        // Get authenticated user
        $user = Auth::user();

        // Get current month, and month
        $currentMonth = Carbon::now()->startOfMonth();
        $currentMonthEnd = Carbon::now()->endOfMonth();

        $allUserInvestments = UserProduct::where('active_account', $user->wallet->active_account)->get();
        $allActiveUserInvestments = UserProduct::where('status', 'active')->where('active_account', $user->wallet->active_account)->get();

        // Closed
        $allEndedUserInvestments = UserProduct::where('status', 'inactive')->where('active_account', $user->wallet->active_account)->get();

        $userActiveInvestmentsThisMonth = UserProduct::where('status', 'active')
            ->where('active_account', $user->wallet->active_account)
            ->whereBetween('start_at', [$currentMonth, $currentMonthEnd])
            ->get();
        $allUserInvestmentsThisMonth = UserProduct::whereBetween('start_at', [$currentMonth, $currentMonthEnd])
            ->where('active_account', $user->wallet->active_account)
            ->get();

        $todayStart = Carbon::now()->startOfDay();
        $todayEnd = Carbon::now()->endOfDay();

        $todayProfitSum = UserProduct::where('status', 'active')
            ->where('active_account', $user->wallet->active_account)
            ->whereBetween('start_at', [$todayStart, $todayEnd])
            ->sum('current_profit_amount');

        $productCategory = ProductCategory::all();

        return view('dashboard.user-investments', compact('allUserInvestments', 'allActiveUserInvestments', 'userActiveInvestmentsThisMonth', 'allUserInvestmentsThisMonth', 'todayProfitSum', 'user', 'productCategory', 'allEndedUserInvestments'));
    }

    public function show($id)
    {
        // Get user
        $user = Auth::user();

        // Get current investment product
        $product = Product::find($id);

        $productCategory = ProductCategory::all();

        return view('dashboard.productInfo', compact('user', 'product', 'productCategory'));
    }

    public function investmentCategoryDetails($id)
    {
        // Get user
        $user = Auth::user();

        // Get current investment product
        $productCategory = ProductCategory::all();

        // Get specific productCategory
        $category = ProductCategory::find($id);

        return view('dashboard.productCategoryInfo', compact('user', 'productCategory', 'category'));
    }

    public function newInvestmentForm($id)
    {
        if (isset($_GET['plan-iv'])) {
            $id = $_GET['plan-iv'];
        }

        // Get user
        $user = Auth::user();

        // Get current investment product
        $product = Product::findOrFail($id);

        // Get current investment product
        $productCategory = ProductCategory::all();

        return view('dashboard.newInvestmentForm', compact('user', 'product', 'productCategory'));
    }

    public function subscribeNewInvestment(Request $request)
    {
        // Check balance
        $user = Auth::user();
        if ($user->wallet->active_account == 'demo') {
            $walletBalance = $user->wallet->demo_balance_after;
        } else {
            $walletBalance = $user->wallet->balance_after;
        }

        if ($walletBalance < $request->input('amount')) {
            return back()->with('error', 'Insufficient Funds');
        }

        // Get product details
        $product = Product::findOrFail($request->input('iv-plan'));

        $months = intval($product->tenor);
        $days = $this->convertMonthsToDays($months);

        // Get the current date and time
        $currentDate = Carbon::now();

        // Add 7 days to the current date
        $endDate = $currentDate->addDays($days);

        // Get interest amount
        $interestAmount = ($product->interest_rate / 100) * $request->input('amount');

        $data = [
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'invested_amount' => $request->input('amount'),
            'start_at' => Carbon::now(),
            'end_at' => $endDate,
            'closed_at' => null,
            'order_date' => Carbon::now(),
            'approved_date' => Carbon::now(),
            'payment_method' => $request->input('iv-wallet'),
            'paid' => true,
            'daily_profit_amount' => $interestAmount / 365,
            'current_profit_amount' => 0,
            'previous_profit_amount' => 0,
            'previous_balance' => 0,
            'current_balance' => $request->input('amount'),
            'status' => 'active',
            'active_account' => $user->wallet->active_account,
        ];

        // Create user investment
        $userProduct = UserProduct::create($data);

        // Creaye transaction data for investment
        $userProductTransactionQuery = $this->prepareTransactionQueryData($request, $userProduct);
        UserProductTransaction::create($userProductTransactionQuery);

        // Debit User balance
        if ($userProduct) {
            if ($user->wallet->active_account == 'demo') {
                $user->wallet->demo_balance_after = $user->wallet->demo_balance_after - $request->input('amount');
            } else {
                $user->wallet->balance_after = $user->wallet->balance_after - $request->input('amount');
            }

            $user->wallet->save();
        }

        // Redirect back with a success message
        return back()->with('success', 'Congratulations, your investment was successful');
    }

    public function showSubscribedDetails($id)
    {
        try {
            // Get auth user
            $user = Auth::user();

            // Get investment details
            $userProduct = UserProduct::findOrFail($id);

            $userProduct->sync();

            // Get product categories
            $productCategory = ProductCategory::all();

            return view('dashboard.user-investments-info', compact('user', 'userProduct', 'productCategory'));
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong - ' . $e->getMessage());
        }
    }

    public function prepareTransactionQueryData($request, $userProduct)
    {
        return [
            'user_id' => Auth::id(),
            'user_product_id' => $userProduct->id,
            'type' => 'investment',
            'narration' => 'Initial Investment deposit',
            'amount' => $request->input('amount'),
            'balance_before_charge' => $userProduct->previous_balance,
            'balance_after_charge' => $userProduct->current_balance,
            'charge_type' => 'credit',
            'active_account' => $userProduct->active_account,
            'created_at' => Carbon::now(),
        ];
    }

    /**
     *  All private functions
     */
    private function convertMonthsToDays($months)
    {
        $interval = CarbonInterval::months($months);
        return $interval->totalDays;
    }
}
