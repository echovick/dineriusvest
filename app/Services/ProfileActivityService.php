<?php
namespace App\Services;

use App\Interfaces\ProfileActivityInterface;
use App\Models\ProfileActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileActivityService implements ProfileActivityInterface
{
    public function registerLoginActivity(Request $request): void
    {
        ProfileActivity::create([
            'user_id' => Auth::id(),
            'device' => $request->header('User-Agent'),
            'ip_address' => $request->ip(),
        ]);
    }
}
