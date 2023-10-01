<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Mail\SendOtp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    protected $otpController;

    public function __construct()
    {
        $this->otpController = new OtpController;
    }

    public function register(StoreUserRequest $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->validated();

            // Create user
            $user = User::create([
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            if (isset($request->ref)) {
                $this->saveUserReferree($request->ref, $user);
            }

            $this->generateAndSendOtpToUser($user);

            // Create wallet for user
            $user->createWallet();

            // Generate referral code for user
            $user->generateReferralCode();

            // Login User
            Auth::login($user, true);

            DB::commit();

            // Redirect to login
            return redirect()->route('dashboard.verify-email');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('site.signup')->with("msg", "Registration could not be completed: {$e->getMessage()}");
        }
    }

    public function login(Request $request){
        try{
            $data = $request->validate([
                'username' => 'required',
                'password' => 'required'
            ]);

            // Check if user exists
            $user = User::where('username', $data['username'])->orWhere('email', $data['username'])->first();
            if(!$user){
                return redirect()->route('login')->with('msg', 'Sorry, user doesnt exist on our database');
            }

            // Validate password
            if(!Hash::check(request('password'), $user->password)){
                return redirect()->route('login')->with('msg', 'Wrong Password');
            }

            // Log user in
            Auth::login($user, true);

            // If user is customer
            if($user->type == 'customer'){
                $this->syncInvestmentData();
                return redirect()->route('dashboard.index');
            }
        }catch(\Exception $e){
            return redirect()->route('login')->with("msg", $e->getMessage());
        }
    }

    public function verifyEmail(Request $request)
    {
        try {
            $data = $request->validate([
                'otp' => 'required|exists:users,otp',
                'resend_otp' => 'nullable',
            ]);

            $user = User::find(Auth::id());

            if (isset($data['resend_otp'])) {
                $this->generateAndSendOtpToUser($user);
                return redirect()->route('dashboard.verify-email')->with("msg", "OTP have been resent successfully");
            }

            // Get current datetime
            $currentDateTime = Carbon::now();

            // Check if the current date and time is past the otp_expires_at date.
            $isExpired = $user->otp_expires_at < $currentDateTime;

            if ($isExpired) {
                // Perform actions for an expired OTP.
                $this->generateAndSendOtpToUser($user);
                return redirect()->route('dashboard.verify-email')->with("msg", "OTP Expired check email for new OTP");
            }

            if ($user->otp == $data['otp']) {
                $user->email_verified_at = $currentDateTime;
                $user->otp = null;
                $user->save();

                if (!isset($user->profile)) {
                    return redirect()->route('dashboard.setup-account');
                } else {
                    return redirect()->route('dashboard.index');
                }
            } else {
                return redirect()->route('dashboard.verify-email')->with("msg", "Invalid OTP, please confirm or resend a new one");
            }
        } catch (\Exception $e) {
            return redirect()->route('dashboard.verify-email')->with("msg", "Verification could not be completed: {$e->getMessage()}");
        }
    }

    private function generateAndSendOtpToUser(User $user)
    {
        $otp = $this->otpController->generateOtp();
        $user->otp = $otp;
        $user->otp_expires_at = Carbon::now()->addMinutes(5);
        $user->Save();

        //send email otp
        Mail::to($user)->send(new SendOtp($user->email, $otp));
    }

    private function saveUserReferree($ref, $user)
    {
        $refferedby = User::where('referral_code', $ref)->first();
        $user->referred_by = $refferedby->id;
        $user->save();
    }

    private function syncInvestmentData()
    {
        $user = Auth::user();

        if($user->investments->count() > 0){
            foreach($user->investments as $investment){
                $investment->sync();
            }
        }
    }
}
