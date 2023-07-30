<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerifyAccountController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.verify-kyc');
    }

    public function verifyEmail()
    {
        return view('dashboard.verify-email');
    }
}
