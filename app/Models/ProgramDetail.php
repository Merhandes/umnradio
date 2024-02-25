<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProgramDetail extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];

    protected $fillable = ['program_name', 'slug', 'description', 'short_desc', 'image', 'banner_image', 'penyiar', 'producer', 'visual_creative', 'audio_creative', 'media_affairs', 'music_director', 'operator'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'program_name'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function episodes(): HasMany
    {
        return $this->hasMany(Podcast::class, 'program_id');
    }
}
