<?php

namespace App\Models\auth;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPayment extends Model
{
    use HasFactory;

    function userFees()
    {
        return $this->belongsTo(User::class, 'id');
    }

}
