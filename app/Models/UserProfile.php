<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'whatsapp',
        'viber',
        'plan',
        'time_investment',
        'current_profession',
        'capital_investment',
        'work_field',
        'daily_orders',
        'problems',
        'additional_problems',
    ];
}
