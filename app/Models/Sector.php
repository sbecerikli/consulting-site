<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'icon',
        'description',
        'services',
        'color',
        'is_published',
        'is_featured',
        'sort_order',
        'published_at',
    ];

    protected $casts = [
        'services' => 'array',
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
        'published_at' => 'datetime',
        'sort_order' => 'integer',
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
