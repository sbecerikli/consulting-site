<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'company_story_title',
        'company_story_content_1',
        'company_story_content_2',
        'company_founded_year',
        'completed_projects_count',
        'expertise_areas_count',
        'mission_title',
        'mission_content',
        'values_title',
        'values_subtitle',
        'value_1_title',
        'value_1_content',
        'value_2_title',
        'value_2_content',
        'value_3_title',
        'value_3_content',
        'team_title',
        'team_subtitle',
        'services_title',
        'services_subtitle',
        'cta_title',
        'cta_subtitle',
        'cta_button_1_text',
        'cta_button_1_url',
        'cta_button_2_text',
        'cta_button_2_url',
    ];

    protected $casts = [
        'company_founded_year' => 'integer',
        'completed_projects_count' => 'integer',
        'expertise_areas_count' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public static function getContent()
    {
        return static::first() ?? static::create([
            'hero_title' => 'Hakkımızda',
            'hero_subtitle' => 'İşinizi büyütmek için uzman danışmanlık hizmetleri sunuyoruz',
            'company_story_title' => 'Şirket Hikayemiz',
            'company_story_content_1' => '2020 yılında kurulan şirketimiz, farklı sektörlerde faaliyet gösteren işletmelere kapsamlı danışmanlık hizmetleri sunmaktadır. Deneyimli ekibimiz ile müşterilerimizin iş hedeflerine ulaşmasında yardımcı oluyoruz.',
            'company_story_content_2' => 'Savunma sanayii, havacılık, otomotiv, endüstri, denizcilik, demiryolu, telekomünikasyon ve yazılım sektörlerinde uzmanlaşmış ekibimiz, her projeye özel çözümler geliştirir.',
            'company_founded_year' => 2020,
            'completed_projects_count' => 50,
            'expertise_areas_count' => 8,
            'mission_title' => 'Misyonumuz',
            'mission_content' => 'Müşterilerimizin iş süreçlerini optimize ederek, verimliliği artırmak ve sürdürülebilir büyüme sağlamak.',
            'values_title' => 'Değerlerimiz',
            'values_subtitle' => 'Çalışma prensiplerimizi oluşturan temel değerler',
            'value_1_title' => 'Güvenilirlik',
            'value_1_content' => 'Müşterilerimizle uzun vadeli güven ilişkisi kurarak, sözümüzü tutarız.',
            'value_2_title' => 'Yenilikçilik',
            'value_2_content' => 'Sürekli gelişim ve yeni teknolojiler ile çözümlerimizi güncelleriz.',
            'value_3_title' => 'Müşteri Odaklılık',
            'value_3_content' => 'Her müşterinin ihtiyacına özel çözümler geliştiririz.',
            'team_title' => 'Ekibimiz',
            'team_subtitle' => 'Uzman kadromuz ile hizmetinizdeyiz',
            'services_title' => 'Hizmetlerimiz',
            'services_subtitle' => 'Size sunduğumuz ana hizmetler',
            'cta_title' => 'Bizimle Çalışmaya Hazır mısınız?',
            'cta_subtitle' => 'Uzman ekibimizle tanışın ve projelerinizi hayata geçirin',
            'cta_button_1_text' => 'İletişime Geçin',
            'cta_button_1_url' => 'contact',
            'cta_button_2_text' => 'Hizmetlerimizi İnceleyin',
            'cta_button_2_url' => 'services.index',
        ]);
    }
}
