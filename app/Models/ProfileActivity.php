<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'device',
        'ip_address'
    ];
}
