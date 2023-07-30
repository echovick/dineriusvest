<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SetupAccountController extends Controller
{
    public function index()
    {
        return view('dashboard.complete-profile');
    }

    public function pendingProfileCompletion()
    {
        return view('dashboard.pending-profile-completion');
    }
}
