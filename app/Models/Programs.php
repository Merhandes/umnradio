<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function episodes(): HasMany{
        return $this->hasMany(Podcast::class);
    }
}
