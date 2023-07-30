<?php

namespace App\Http\Controllers;

use App\Models\User;

class OtpController extends Controller
{
    public function generateOtp()
    {
        // Generate a random 6-digit number
        $otp = rand(100000, 999999);

        return $otp;
    }
}
