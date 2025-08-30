<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    protected $fillable = [
        'company_name',
        'company_description',
        'address',
        'phone',
        'email',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
        'instagram_url',
        'youtube_url',
        'latitude',
        'longitude',
        'map_zoom',
        'copyright_text',
        'privacy_policy_url',
        'terms_of_service_url',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public static function getSettings()
    {
        return static::first() ?? static::create([
            'company_name' => 'Teknik Danışmanlık',
            'company_description' => 'İşinizi büyütmek için uzman danışmanlık hizmetleri',
            'address' => 'İstanbul, Türkiye',
            'phone' => '+90 (212) 123 45 67',
            'email' => 'info@teknikdanismanlik.com',
            'facebook_url' => '#',
            'twitter_url' => '#',
            'linkedin_url' => '#',
            'instagram_url' => '#',
            'youtube_url' => '#',
            'latitude' => 41.0082,
            'longitude' => 28.9784,
            'map_zoom' => '15',
            'copyright_text' => '© 2024 Teknik Danışmanlık. Tüm hakları saklıdır.',
            'privacy_policy_url' => '#',
            'terms_of_service_url' => '#',
        ]);
    }
}
