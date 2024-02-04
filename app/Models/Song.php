<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Song extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    protected $fillable = ['title', 'artists', 'chart_id', 'cover_image'];

    public function chartjunction(): HasMany{
        return $this->hasMany(ChartJunction::class);
    }
}
