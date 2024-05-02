<?php
namespace App\Interfaces;

interface ProfileInterface
{
    public function changePassword(array $param): bool;
}
