<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'broadcast_time_start',
        'broadcast_time_end',
        'broadcast_day',
        'img'
    ];
}
