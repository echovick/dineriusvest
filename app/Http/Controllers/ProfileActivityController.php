<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProfileActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileActivityController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $products = Product::all();
        $productCategory = ProductCategory::all();
        $user = Auth::user();
        $activity = ProfileActivity::where('user_id', Auth::id())->get();
        return view('dashboard.profile-activity', compact('products', 'productCategory', 'user', 'activity'));
    }
}
