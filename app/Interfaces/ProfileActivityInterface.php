<?php
namespace App\Interfaces;

use App\Http\Requests\StoreUserRequest;

interface ProfileActivityInterface
{
    public function registerLoginActivity(StoreUserRequest $request): void;
}
?>
