<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteSettings;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSettings::create([
            'company_name' => 'EMT Dinamik',
            'company_description' => 'İşletmelerin büyüme hedeflerine ulaşması için uzman danışmanlık hizmetleri sunuyoruz.',
            'address' => 'İstanbul, Türkiye',
            'phone' => '+90 (212) 555 0123',
            'email' => 'info@emtdinamik.com',
            'facebook_url' => 'https://facebook.com/emtdinamik',
            'twitter_url' => 'https://twitter.com/emtdinamik',
            'linkedin_url' => 'https://linkedin.com/company/emtdinamik',
            'instagram_url' => 'https://instagram.com/emtdinamik',
            'youtube_url' => 'https://youtube.com/emtdinamik',
            'latitude' => 41.0082,
            'longitude' => 28.9784,
            'map_zoom' => '15',
            'copyright_text' => '© 2025 EMT Dinamik. Tüm hakları saklıdır.',
            'privacy_policy_url' => '/privacy-policy',
            'terms_of_service_url' => '/terms-of-service',
        ]);
    }
}
