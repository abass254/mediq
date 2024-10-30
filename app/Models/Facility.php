<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'fc_name',
        'fc_location',
        'fc_phone',
        'fc_email',
        'fc_desc',
        'fc_status',
    ];
}
