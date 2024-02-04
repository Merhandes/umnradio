<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Podcast extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['title', 'embed_code', 'program_id'];

    public function program(): BelongsTo{
        return $this->belongsTo(ProgramDetail::class, 'program_id');
    }
}
