<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;

class VerifyAccountController extends Controller
{
    //
    public function index()
    {
        $productCategory = ProductCategory::all();

        $user = Auth::user();

        return view('dashboard.verify-kyc', compact('productCategory', 'user'));
    }

    public function verifyEmail()
    {
        $productCategory = ProductCategory::all();

        $user = Auth::user();

        return view('dashboard.verify-email', compact('productCategory', 'user'));
    }
}
