<?php
namespace App\Services;

use App\Interfaces\ProfileInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileService implements ProfileInterface
{
    public function changePassword(array $param): bool
    {
        try {
            $user = User::find(Auth::id());
            $user->password = Hash::make($param['password']);
            $user->save();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
