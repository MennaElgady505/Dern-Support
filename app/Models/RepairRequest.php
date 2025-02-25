<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_type',
        'business_name',
        'contact_name',
        'full_name',
        'email',
        'phone',
        'device_type',
        'issue_description',
        'service_type',
        'pickup_address',
        'preferred_date',
        'business_location',
        'office_location',
    ];
}
