<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'fc_id',
        'fc_location',
        'is_main',
        'location_status',
    ];
}
