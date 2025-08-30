<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title');
            $table->text('hero_subtitle');
            $table->string('company_story_title');
            $table->text('company_story_content_1');
            $table->text('company_story_content_2');
            $table->integer('company_founded_year');
            $table->integer('completed_projects_count');
            $table->integer('expertise_areas_count');
            $table->string('mission_title');
            $table->text('mission_content');
            $table->string('values_title');
            $table->text('values_subtitle');
            $table->string('value_1_title');
            $table->text('value_1_content');
            $table->string('value_2_title');
            $table->text('value_2_content');
            $table->string('value_3_title');
            $table->text('value_3_content');
            $table->string('team_title');
            $table->text('team_subtitle');
            $table->string('services_title');
            $table->text('services_subtitle');
            $table->string('cta_title');
            $table->text('cta_subtitle');
            $table->string('cta_button_1_text');
            $table->string('cta_button_1_url');
            $table->string('cta_button_2_text');
            $table->string('cta_button_2_url');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_pages');
    }
};
