<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChartJunction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['chart_id', 'chart_name', 'song_id', 'song_title', 'position'];

    public function chart(): BelongsTo{
        return $this->belongsTo(Chart::class);
    }

    public function song(): BelongsTo{
        return $this->belongsTo(Song::class);
    }
}
