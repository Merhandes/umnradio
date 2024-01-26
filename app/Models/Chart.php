<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Chart extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['chart_name', 'cover_image', 'link', 'status'];

    public function chartjunction(): HasMany
    {
        return $this->hasMany(ChartJunction::class);
    }

    public function songs(): HasManyThrough
    {
        return $this->hasManyThrough(Song::class, ChartJunction::class,'chart_id', 'id', 'id', 'song_id');
    }
}
