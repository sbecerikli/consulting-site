<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Clear existing data
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        \App\Models\User::truncate();
        \App\Models\SiteSettings::truncate();
        \App\Models\Service::truncate();
        \App\Models\Sector::truncate();
        \App\Models\CaseStudy::truncate();
        \App\Models\TeamMember::truncate();
        \App\Models\Testimonial::class::truncate();
        
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $this->call([
            UserSeeder::class,
            SiteSettingsSeeder::class,
            ServiceSeeder::class,
            SectorSeeder::class,
            CaseStudySeeder::class,
            TeamMemberSeeder::class,
            TestimonialSeeder::class,
        ]);
    }
}
