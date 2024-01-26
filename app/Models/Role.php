<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'username',
        'role'
    ];

    public function user(): HasOne{
        return $this->hasOne(User::class, 'user_id');
    }

    public function roledef(): BelongsTo{
        return $this->belongsTo(Roledef::class, "role");
    }
}
