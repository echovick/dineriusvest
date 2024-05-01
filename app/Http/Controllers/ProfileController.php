<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $products = Product::all();
        $productCategory = ProductCategory::all();
        $user = Auth::user();
        return view('dashboard.profile', compact('products', 'productCategory', 'user'));
    }
}
