<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SetupAccountController extends Controller
{
    public function index()
    {
        $productCategory = ProductCategory::all();

        $user = Auth::user();

        return view('dashboard.complete-profile', compact('productCategory', 'user'));
    }

    public function pendingProfileCompletion()
    {
        $productCategory = ProductCategory::all();

        $user = Auth::user();

        return view('dashboard.pending-profile-completion', compact('productCategory', 'user'));
    }
}
