<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            // Eski Google Maps alanlarını kaldır
            if (Schema::hasColumn('site_settings', 'google_maps_api_key')) {
                $table->dropColumn('google_maps_api_key');
            }
            if (Schema::hasColumn('site_settings', 'google_maps_zoom')) {
                $table->dropColumn('google_maps_zoom');
            }
            
            // Yeni OpenStreetMap alanlarını ekle
            if (!Schema::hasColumn('site_settings', 'latitude')) {
                $table->decimal('latitude', 10, 8)->nullable()->after('youtube_url');
            }
            if (!Schema::hasColumn('site_settings', 'longitude')) {
                $table->decimal('longitude', 11, 8)->nullable()->after('latitude');
            }
            if (!Schema::hasColumn('site_settings', 'map_zoom')) {
                $table->string('map_zoom')->default('15')->after('longitude');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->string('google_maps_api_key')->nullable()->after('youtube_url');
            $table->string('google_maps_zoom')->default('15')->after('longitude');
        });
    }
};
