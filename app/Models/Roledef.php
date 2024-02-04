<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Roledef extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function role(): HasMany{
        return $this->hasMany(Role::class);
    }
}
