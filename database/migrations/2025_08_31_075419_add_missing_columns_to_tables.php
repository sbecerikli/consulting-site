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
        // Team Members tablosuna eksik kolonları ekle
        if (!Schema::hasColumn('team_members', 'is_published')) {
            Schema::table('team_members', function (Blueprint $table) {
                $table->boolean('is_published')->default(true)->after('is_active');
                $table->integer('sort_order')->default(0)->after('is_published');
            });
        }

        // Services tablosuna eksik kolonları ekle
        if (!Schema::hasColumn('services', 'is_published')) {
            Schema::table('services', function (Blueprint $table) {
                $table->boolean('is_published')->default(true)->after('body');
                $table->boolean('is_featured')->default(false)->after('is_published');
                $table->timestamp('published_at')->nullable()->after('is_featured');
            });
        }

        // Sectors tablosuna eksik kolonları ekle
        if (!Schema::hasColumn('sectors', 'is_published')) {
            Schema::table('sectors', function (Blueprint $table) {
                $table->boolean('is_published')->default(true)->after('body');
                $table->boolean('is_featured')->default(false)->after('is_published');
                $table->timestamp('published_at')->nullable()->after('is_featured');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Team Members tablosundan kolonları kaldır
        Schema::table('team_members', function (Blueprint $table) {
            $table->dropColumn(['is_published', 'sort_order']);
        });

        // Services tablosundan kolonları kaldır
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['is_published', 'is_featured', 'published_at']);
        });

        // Sectors tablosundan kolonları kaldır
        Schema::table('sectors', function (Blueprint $table) {
            $table->dropColumn(['is_published', 'is_featured', 'published_at']);
        });
    }
};
