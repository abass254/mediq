<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSpeciality extends Model
{
    use HasFactory;

    protected $fillable = [
        'dc_id',
        'dc_speciality',
        'is_main',
        'spec_status',
    ];
}
