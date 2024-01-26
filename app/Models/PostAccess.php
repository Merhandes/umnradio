<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PostAccess extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'user_id', 'action'];

    public function post(): HasOne{
        return $this->hasOne(Post::class, 'post_id');
    }

    public function user(): HasOne{
        return $this->hasOne(User::class, 'user_id');
    }
}
