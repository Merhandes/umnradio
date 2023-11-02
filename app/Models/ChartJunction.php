<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartJunction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['chart_id', 'chart_name', 'song_id', 'song_title', 'position'];
}
