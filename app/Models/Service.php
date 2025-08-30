<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'image',
        'icon',
        'hero_image',
        'price',
        'price_type',
        'duration',
        'delivery_time',
        'features',
        'process',
        'is_published',
        'is_featured',
        'published_at',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
        'published_at' => 'datetime',
        'features' => 'array',
        'process' => 'array',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
