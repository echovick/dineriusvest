<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;

class VerifyAccountController extends Controller
{
    //
    public function index()
    {
        $productCategory = ProductCategory::all();

        return view('dashboard.verify-kyc', compact('productCategory'));
    }

    public function verifyEmail()
    {
        $productCategory = ProductCategory::all();

        return view('dashboard.verify-email', compact('productCategory'));
    }
}
