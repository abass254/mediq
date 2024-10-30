<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityDoctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'fd_doc',
        'fd_fac',
        'fd_status',
    ];
}
