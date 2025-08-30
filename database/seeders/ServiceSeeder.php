<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'İş Geliştirme Danışmanlığı',
                'slug' => 'is-gelistirme-danismanligi',
                'excerpt' => 'Şirketinizin büyüme stratejilerini geliştirin ve yeni pazarlara açılın.',
                'body' => 'İş geliştirme danışmanlığı, şirketinizin mevcut durumunu analiz ederek büyüme fırsatlarını belirlememizi ve stratejik planlar geliştirmemizi sağlar. Pazar araştırması, rekabet analizi ve büyüme stratejileri konularında uzman desteği sunuyoruz.',
                'icon' => 'chart',
                'features' => [
                    ['feature' => 'Pazar Araştırması ve Analizi'],
                    ['feature' => 'Büyüme Stratejisi Geliştirme'],
                    ['feature' => 'Rekabet Analizi'],
                    ['feature' => 'Yeni Pazar Giriş Stratejileri'],
                ],
                'process' => [
                    ['step' => 'Mevcut Durum Analizi', 'description' => 'Şirketin mevcut durumu ve potansiyeli değerlendirilir'],
                    ['step' => 'Pazar Araştırması', 'description' => 'Hedef pazarlar ve fırsatlar analiz edilir'],
                    ['step' => 'Strateji Geliştirme', 'description' => 'Büyüme stratejileri ve yol haritası oluşturulur'],
                    ['step' => 'Uygulama ve Takip', 'description' => 'Stratejiler uygulanır ve sonuçlar takip edilir'],
                ],
                'is_published' => true,
                'is_featured' => true,
                'published_at' => now(),
            ],
            [
                'title' => 'Venture Capital Danışmanlığı',
                'slug' => 'venture-capital-danismanligi',
                'excerpt' => 'Startup\'ınız için yatırım stratejileri ve finansman çözümleri geliştirin.',
                'body' => 'Venture capital danışmanlığı, startup\'ların ve büyüme aşamasındaki şirketlerin yatırım ihtiyaçlarını karşılamak için kapsamlı destek sağlar. Yatırım stratejileri, finansman modelleri ve yatırımcı ilişkileri konularında uzmanlık sunuyoruz.',
                'icon' => 'lightbulb',
                'features' => [
                    ['feature' => 'Yatırım Stratejisi Geliştirme'],
                    ['feature' => 'Finansman Modeli Oluşturma'],
                    ['feature' => 'Yatırımcı İlişkileri'],
                    ['feature' => 'Due Diligence Desteği'],
                ],
                'process' => [
                    ['step' => 'Finansal Durum Analizi', 'description' => 'Şirketin finansal durumu ve ihtiyaçları değerlendirilir'],
                    ['step' => 'Yatırım Stratejisi', 'description' => 'Uygun yatırım stratejileri belirlenir'],
                    ['step' => 'Yatırımcı Arama', 'description' => 'Potansiyel yatırımcılar tespit edilir'],
                    ['step' => 'Anlaşma Süreci', 'description' => 'Yatırım anlaşması süreci yönetilir'],
                ],
                'is_published' => true,
                'is_featured' => true,
                'published_at' => now(),
            ],
            [
                'title' => 'M&A (Birleşme ve Satın Alma) Danışmanlığı',
                'slug' => 'ma-birlesme-ve-satin-alma-danismanligi',
                'excerpt' => 'Birleşme ve satın alma süreçlerinde profesyonel danışmanlık hizmetleri.',
                'body' => 'M&A danışmanlığı, şirketlerin birleşme ve satın alma süreçlerinde ihtiyaç duydukları tüm aşamalarda destek sağlar. Stratejik planlama, değerleme, müzakere ve entegrasyon süreçlerinde uzmanlık sunuyoruz.',
                'icon' => 'users',
                'features' => [
                    ['feature' => 'Stratejik Planlama'],
                    ['feature' => 'Hedef Şirket Analizi'],
                    ['feature' => 'Değerleme ve Fiyatlandırma'],
                    ['feature' => 'Müzakere ve Anlaşma'],
                ],
                'process' => [
                    ['step' => 'Stratejik Değerlendirme', 'description' => 'M&A hedefleri ve stratejisi belirlenir'],
                    ['step' => 'Hedef Arama ve Analiz', 'description' => 'Potansiyel hedefler tespit edilir ve analiz edilir'],
                    ['step' => 'Değerleme ve Fiyatlandırma', 'description' => 'Hedef şirket değerlenir ve fiyat belirlenir'],
                    ['step' => 'Müzakere ve Kapanış', 'description' => 'Anlaşma müzakereleri yürütülür ve süreç tamamlanır'],
                ],
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now(),
            ],
            [
                'title' => 'Değerleme Danışmanlığı',
                'slug' => 'degerleme-danismanligi',
                'excerpt' => 'Şirketinizin gerçek değerini belirleyin ve stratejik kararlar alın.',
                'body' => 'Değerleme danışmanlığı, şirketlerin gerçek piyasa değerini belirlemek için kapsamlı analizler yapar. Farklı değerleme yöntemleri kullanarak objektif ve güvenilir değer tahminleri sunuyoruz.',
                'icon' => 'chart',
                'features' => [
                    ['feature' => 'Çoklu Değerleme Yöntemleri'],
                    ['feature' => 'Finansal Analiz'],
                    ['feature' => 'Pazar Karşılaştırması'],
                    ['feature' => 'Risk Analizi'],
                ],
                'process' => [
                    ['step' => 'Finansal Veri Analizi', 'description' => 'Şirketin finansal verileri detaylı olarak analiz edilir'],
                    ['step' => 'Değerleme Yöntemi Seçimi', 'description' => 'Uygun değerleme yöntemleri belirlenir'],
                    ['step' => 'Değer Hesaplama', 'description' => 'Seçilen yöntemlerle değer hesaplanır'],
                    ['step' => 'Rapor Hazırlama', 'description' => 'Detaylı değerleme raporu hazırlanır'],
                ],
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now(),
            ],
            [
                'title' => 'Due Diligence (Hakkaniyet Araştırması)',
                'slug' => 'due-diligence-hakkaniyet-arastirmasi',
                'excerpt' => 'Yatırım öncesi kapsamlı araştırma ve risk analizi hizmetleri.',
                'body' => 'Due diligence süreci, yatırım kararları öncesinde hedef şirketin tüm yönlerinin detaylı olarak incelenmesini sağlar. Finansal, yasal, operasyonel ve stratejik riskleri tespit ederek bilinçli kararlar almanıza yardımcı oluyoruz.',
                'icon' => 'shield',
                'features' => [
                    ['feature' => 'Finansal Due Diligence'],
                    ['feature' => 'Yasal Due Diligence'],
                    ['feature' => 'Operasyonel Due Diligence'],
                    ['feature' => 'Stratejik Due Diligence'],
                ],
                'process' => [
                    ['step' => 'Kapsam Belirleme', 'description' => 'Due diligence kapsamı ve hedefleri belirlenir'],
                    ['step' => 'Veri Toplama', 'description' => 'Gerekli tüm veriler ve belgeler toplanır'],
                    ['step' => 'Analiz ve Değerlendirme', 'description' => 'Toplanan veriler analiz edilir ve riskler değerlendirilir'],
                    ['step' => 'Rapor ve Öneriler', 'description' => 'Detaylı rapor hazırlanır ve öneriler sunulur'],
                ],
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now(),
            ],
            [
                'title' => 'Genel Danışmanlık Hizmetleri',
                'slug' => 'genel-danismanlik-hizmetleri',
                'excerpt' => 'Şirketinizin ihtiyaçlarına özel kapsamlı danışmanlık çözümleri.',
                'body' => 'Genel danışmanlık hizmetleri, şirketlerin karşılaştığı çeşitli zorluklara çözüm üretmek için tasarlanmıştır. Stratejik planlama, operasyonel verimlilik, organizasyonel gelişim ve değişim yönetimi konularında destek sağlıyoruz.',
                'icon' => 'globe',
                'features' => [
                    ['feature' => 'Stratejik Planlama'],
                    ['feature' => 'Operasyonel Verimlilik'],
                    ['feature' => 'Organizasyonel Gelişim'],
                    ['feature' => 'Değişim Yönetimi'],
                ],
                'process' => [
                    ['step' => 'İhtiyaç Analizi', 'description' => 'Şirketin mevcut durumu ve ihtiyaçları analiz edilir'],
                    ['step' => 'Çözüm Tasarımı', 'description' => 'İhtiyaçlara uygun çözümler tasarlanır'],
                    ['step' => 'Uygulama ve Eğitim', 'description' => 'Çözümler uygulanır ve ekip eğitilir'],
                    ['step' => 'Takip ve Optimizasyon', 'description' => 'Sonuçlar takip edilir ve süreçler optimize edilir'],
                ],
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now(),
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
