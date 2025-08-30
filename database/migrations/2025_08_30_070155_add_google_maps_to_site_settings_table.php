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
            $table->decimal('latitude', 10, 8)->nullable()->after('youtube_url');
            $table->decimal('longitude', 11, 8)->nullable()->after('latitude');
            $table->string('map_zoom')->default('15')->after('longitude');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn(['latitude', 'longitude', 'map_zoom']);
        });
    }
};
