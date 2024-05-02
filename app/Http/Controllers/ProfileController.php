<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProfileActivity;
use App\Services\ProfileService;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    protected $profileService;

    public function __construct()
    {
        $this->profileService = new ProfileService;
    }

    public function index()
    {
        $products = Product::all();
        $productCategory = ProductCategory::all();
        $user = Auth::user();
        return view('dashboard.profile', compact('products', 'productCategory', 'user'));
    }

    public function settings()
    {
        $products = Product::all();
        $productCategory = ProductCategory::all();
        $user = Auth::user();
        $activities = ProfileActivity::where('user_id', Auth::id())->get();
        return view('dashboard.profile-settings', compact('products', 'productCategory', 'user', 'activities'));
    }

    public function changePassword()
    {
        $products = Product::all();
        $productCategory = ProductCategory::all();
        $user = Auth::user();
        return view('dashboard.change-password', compact('products', 'productCategory', 'user'));
    }

    public function submitChangePasword(ChangePasswordRequest $request)
    {
        $res = $this->profileService->changePassword($request->validated());
        if(!$res){
            return redirect()->back()->with('msg', 'Sorry, your password could not be changed, try again shortly');
        }
        return redirect()->back()->with('success', 'Password Changed Successfully');
    }
}
