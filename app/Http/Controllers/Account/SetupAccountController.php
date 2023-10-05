<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class SetupAccountController extends Controller
{
    public function index()
    {
        $productCategory = ProductCategory::all();

        return view('dashboard.complete-profile', compact('productCategory'));
    }

    public function pendingProfileCompletion()
    {
        $productCategory = ProductCategory::all();

        return view('dashboard.pending-profile-completion', compact('productCategory'));
    }
}
