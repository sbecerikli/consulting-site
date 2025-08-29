<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    /** @use HasFactory<\Database\Factories\TeamMemberFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'role',
        'photo',
        'email',
        'phone',
        'linkedin_url',
        'twitter_url',
        'github_url',
        'display_order',
        'is_active',
    ];
}
