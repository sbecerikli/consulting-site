<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // SQLite veritabanından veri okuma
        $sqlitePath = database_path('database.sqlite');
        
        if (!file_exists($sqlitePath)) {
            return;
        }

        try {
            // SQLite bağlantısı
            $sqliteConnection = new PDO('sqlite:' . $sqlitePath);
            $sqliteConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Users tablosundan veri taşı
            $this->migrateUsers($sqliteConnection);
            
            // Services tablosundan veri taşı
            $this->migrateServices($sqliteConnection);
            
            // Sectors tablosundan veri taşı
            $this->migrateSectors($sqliteConnection);
            
            // Team Members tablosundan veri taşı
            $this->migrateTeamMembers($sqliteConnection);
            
            // Case Studies tablosundan veri taşı
            $this->migrateCaseStudies($sqliteConnection);
            
            // Testimonials tablosundan veri taşı
            $this->migrateTestimonials($sqliteConnection);
            
            // Contact Messages tablosundan veri taşı
            $this->migrateContactMessages($sqliteConnection);
            
            // Site Settings tablosundan veri taşı
            $this->migrateSiteSettings($sqliteConnection);
            
            // About Pages tablosundan veri taşı
            $this->migrateAboutPages($sqliteConnection);
            
            // Newsletters tablosundan veri taşı
            $this->migrateNewsletters($sqliteConnection);

            $this->command->info('SQLite verileri MySQL\'e başarıyla taşındı!');
            
        } catch (Exception $e) {
            $this->command->error('Veri taşıma hatası: ' . $e->getMessage());
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Veri taşıma işlemi geri alınamaz
        $this->command->info('Veri taşıma işlemi geri alınamaz.');
    }

    /**
     * Users tablosundan veri taşı
     */
    private function migrateUsers($sqliteConnection): void
    {
        if ($this->tableExists($sqliteConnection, 'users')) {
            $users = $sqliteConnection->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($users as $user) {
                if (!DB::table('users')->where('email', $user['email'])->exists()) {
                    DB::table('users')->insert([
                        'name' => $user['name'],
                        'email' => $user['email'],
                        'password' => $user['password'],
                        'email_verified_at' => $user['email_verified_at'],
                        'created_at' => $user['created_at'],
                        'updated_at' => $user['updated_at'],
                    ]);
                }
            }
        }
    }

    /**
     * Services tablosundan veri taşı
     */
    private function migrateServices($sqliteConnection): void
    {
        if ($this->tableExists($sqliteConnection, 'services')) {
            $services = $sqliteConnection->query('SELECT * FROM services')->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($services as $service) {
                if (!DB::table('services')->where('slug', $service['slug'])->exists()) {
                    DB::table('services')->insert([
                        'title' => $service['title'],
                        'slug' => $service['slug'],
                        'excerpt' => $service['excerpt'],
                        'body' => $service['body'],
                        'icon' => $service['icon'],
                        'features' => $service['features'],
                        'process' => $service['process'],
                        'is_published' => $service['is_published'] ?? true,
                        'is_featured' => $service['is_featured'] ?? false,
                        'published_at' => $service['published_at'] ?? now(),
                        'created_at' => $service['created_at'],
                        'updated_at' => $service['updated_at'],
                    ]);
                }
            }
        }
    }

    /**
     * Sectors tablosundan veri taşı
     */
    private function migrateSectors($sqliteConnection): void
    {
        if ($this->tableExists($sqliteConnection, 'sectors')) {
            $sectors = $sqliteConnection->query('SELECT * FROM sectors')->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($sectors as $sector) {
                if (!DB::table('sectors')->where('slug', $sector['slug'])->exists()) {
                    DB::table('sectors')->insert([
                        'title' => $sector['title'],
                        'slug' => $sector['slug'],
                        'excerpt' => $sector['excerpt'],
                        'body' => $sector['body'],
                        'icon' => $service['icon'] ?? 'chart',
                        'services' => $sector['services'] ?? [],
                        'is_published' => $sector['is_published'] ?? true,
                        'is_featured' => $sector['is_featured'] ?? false,
                        'published_at' => $sector['published_at'] ?? now(),
                        'created_at' => $sector['created_at'],
                        'updated_at' => $sector['updated_at'],
                    ]);
                }
            }
        }
    }

    /**
     * Team Members tablosundan veri taşı
     */
    private function migrateTeamMembers($sqliteConnection): void
    {
        if ($this->tableExists($sqliteConnection, 'team_members')) {
            $members = $sqliteConnection->query('SELECT * FROM team_members')->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($members as $member) {
                if (!DB::table('team_members')->where('email', $member['email'])->exists()) {
                    DB::table('team_members')->insert([
                        'name' => $member['name'],
                        'role' => $member['role'],
                        'photo' => $member['photo'],
                        'email' => $member['email'],
                        'phone' => $member['phone'],
                        'linkedin_url' => $member['linkedin_url'],
                        'twitter_url' => $member['twitter_url'],
                        'github_url' => $member['github_url'],
                        'display_order' => $member['display_order'] ?? 0,
                        'is_active' => $member['is_active'] ?? true,
                        'is_published' => $member['is_published'] ?? true,
                        'sort_order' => $member['sort_order'] ?? 0,
                        'created_at' => $member['created_at'],
                        'updated_at' => $member['updated_at'],
                    ]);
                }
            }
        }
    }

    /**
     * Case Studies tablosundan veri taşı
     */
    private function migrateCaseStudies($sqliteConnection): void
    {
        if ($this->tableExists($sqliteConnection, 'case_studies')) {
            $caseStudies = $sqliteConnection->query('SELECT * FROM case_studies')->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($caseStudies as $caseStudy) {
                if (!DB::table('case_studies')->where('slug', $caseStudy['slug'])->exists()) {
                    DB::table('case_studies')->insert([
                        'title' => $caseStudy['title'],
                        'slug' => $caseStudy['slug'],
                        'excerpt' => $caseStudy['excerpt'],
                        'body' => $caseStudy['body'],
                        'image' => $caseStudy['image'],
                        'client' => $caseStudy['client'],
                        'industry' => $caseStudy['industry'],
                        'results' => $caseStudy['results'],
                        'is_published' => $caseStudy['is_published'] ?? true,
                        'published_at' => $caseStudy['published_at'] ?? now(),
                        'created_at' => $caseStudy['created_at'],
                        'updated_at' => $caseStudy['updated_at'],
                    ]);
                }
            }
        }
    }

    /**
     * Testimonials tablosundan veri taşı
     */
    private function migrateTestimonials($sqliteConnection): void
    {
        if ($this->tableExists($sqliteConnection, 'testimonials')) {
            $testimonials = $sqliteConnection->query('SELECT * FROM testimonials')->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($testimonials as $testimonial) {
                if (!DB::table('testimonials')->where('id', $testimonial['id'])->exists()) {
                    DB::table('testimonials')->insert([
                        'name' => $testimonial['name'],
                        'company' => $testimonial['company'],
                        'position' => $testimonial['position'],
                        'content' => $testimonial['content'],
                        'rating' => $testimonial['rating'],
                        'photo' => $testimonial['photo'],
                        'is_published' => $testimonial['is_published'] ?? true,
                        'created_at' => $testimonial['created_at'],
                        'updated_at' => $testimonial['updated_at'],
                    ]);
                }
            }
        }
    }

    /**
     * Contact Messages tablosundan veri taşı
     */
    private function migrateContactMessages($sqliteConnection): void
    {
        if ($this->tableExists($sqliteConnection, 'contact_messages')) {
            $messages = $sqliteConnection->query('SELECT * FROM contact_messages')->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($messages as $message) {
                if (!DB::table('contact_messages')->where('id', $message['id'])->exists()) {
                    DB::table('contact_messages')->insert([
                        'name' => $message['name'],
                        'email' => $message['email'],
                        'phone' => $message['phone'],
                        'company' => $message['company'] ?? null,
                        'message' => $message['message'],
                        'is_read' => $message['is_read'] ?? false,
                        'created_at' => $message['created_at'],
                        'updated_at' => $message['updated_at'],
                    ]);
                }
            }
        }
    }

    /**
     * Site Settings tablosundan veri taşı
     */
    private function migrateSiteSettings($sqliteConnection): void
    {
        if ($this->tableExists($sqliteConnection, 'site_settings')) {
            $settings = $sqliteConnection->query('SELECT * FROM site_settings')->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($settings as $setting) {
                if (!DB::table('site_settings')->where('id', $setting['id'])->exists()) {
                    DB::table('site_settings')->insert([
                        'company_name' => $setting['company_name'],
                        'company_description' => $setting['company_description'],
                        'address' => $setting['address'],
                        'phone' => $setting['phone'],
                        'email' => $setting['email'],
                        'facebook_url' => $setting['facebook_url'],
                        'twitter_url' => $setting['twitter_url'],
                        'linkedin_url' => $setting['linkedin_url'],
                        'instagram_url' => $setting['instagram_url'],
                        'youtube_url' => $setting['youtube_url'],
                        'latitude' => $setting['latitude'] ?? null,
                        'longitude' => $setting['longitude'] ?? null,
                        'map_zoom' => $setting['map_zoom'] ?? '15',
                        'copyright_text' => $setting['copyright_text'],
                        'privacy_policy_url' => $setting['privacy_policy_url'],
                        'terms_of_service_url' => $setting['terms_of_service_url'],
                        'created_at' => $setting['created_at'],
                        'updated_at' => $setting['updated_at'],
                    ]);
                }
            }
        }
    }

    /**
     * About Pages tablosundan veri taşı
     */
    private function migrateAboutPages($sqliteConnection): void
    {
        if ($this->tableExists($sqliteConnection, 'about_pages')) {
            $aboutPages = $sqliteConnection->query('SELECT * FROM about_pages')->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($aboutPages as $aboutPage) {
                if (!DB::table('about_pages')->where('id', $aboutPage['id'])->exists()) {
                    DB::table('about_pages')->insert([
                        'hero_title' => $aboutPage['hero_title'],
                        'hero_subtitle' => $aboutPage['hero_subtitle'],
                        'company_story_title' => $aboutPage['company_story_title'],
                        'company_story_content_1' => $aboutPage['company_story_content_1'],
                        'company_story_content_2' => $aboutPage['company_story_content_2'],
                        'mission_title' => $aboutPage['mission_title'],
                        'mission_content' => $aboutPage['mission_content'],
                        'values_title' => $aboutPage['values_title'],
                        'values_content' => $aboutPage['values_content'],
                        'team_title' => $aboutPage['team_title'],
                        'team_subtitle' => $aboutPage['team_subtitle'],
                        'created_at' => $aboutPage['created_at'],
                        'updated_at' => $aboutPage['updated_at'],
                    ]);
                }
            }
        }
    }

    /**
     * Newsletters tablosundan veri taşı
     */
    private function migrateNewsletters($sqliteConnection): void
    {
        if ($this->tableExists($sqliteConnection, 'about_pages')) {
            $newsletters = $sqliteConnection->query('SELECT * FROM newsletters')->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($newsletters as $newsletter) {
                if (!DB::table('newsletters')->where('email', $newsletter['email'])->exists()) {
                    DB::table('newsletters')->insert([
                        'email' => $newsletter['email'],
                        'is_active' => $newsletter['is_active'] ?? true,
                        'created_at' => $newsletter['created_at'],
                        'updated_at' => $newsletter['updated_at'],
                    ]);
                }
            }
        }
    }

    /**
     * Tablo var mı kontrol et
     */
    private function tableExists($sqliteConnection, $tableName): bool
    {
        try {
            $result = $sqliteConnection->query("SELECT name FROM sqlite_master WHERE type='table' AND name='{$tableName}'");
            return $result->fetch() !== false;
        } catch (Exception $e) {
            return false;
        }
    }
};
