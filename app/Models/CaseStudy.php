<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    /** @use HasFactory<\Database\Factories\CaseStudyFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'client_name',
        'summary',
        'body',
        'results',
        'started_at',
        'completed_at',
        'featured_image',
        'is_published',
        'published_at',
    ];
}
