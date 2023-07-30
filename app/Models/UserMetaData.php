<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMetaData extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'phone_number',
        'date_of_birth',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'country',
        'zipcode',
    ];

    // Define the user relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
