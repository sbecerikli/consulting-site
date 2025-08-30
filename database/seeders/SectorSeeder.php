<?php

namespace Database\Seeders;

use App\Models\Sector;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sectors = [
            [
                'name' => 'Savunma Sanayii',
                'title' => 'Savunma ve Güvenlik Teknolojileri',
                'icon' => 'shield',
                'description' => 'Savunma sanayii şirketleri, askeri teknoloji firmaları ve güvenlik çözümleri için kapsamlı danışmanlık hizmetleri.',
                'services' => [
                    ['service' => 'Stratejik Planlama'],
                    ['service' => 'M&A'],
                    ['service' => 'Değerleme'],
                    ['service' => 'Due Diligence'],
                ],
                'color' => 'from-slate-600 to-slate-800',
                'is_published' => true,
                'is_featured' => true,
                'sort_order' => 1,
                'published_at' => now(),
            ],
            [
                'name' => 'Havacılık',
                'title' => 'Havacılık ve Uzay Teknolojileri',
                'icon' => 'airplane',
                'description' => 'Havayolu şirketleri, uçak üreticileri, havaalanı operatörleri ve havacılık teknolojileri için danışmanlık.',
                'services' => [
                    ['service' => 'İş Geliştirme'],
                    ['service' => 'Stratejik Planlama'],
                    ['service' => 'Operasyonel Mükemmellik'],
                    ['service' => 'M&A'],
                ],
                'color' => 'from-blue-400 to-blue-600',
                'is_published' => true,
                'is_featured' => true,
                'sort_order' => 2,
                'published_at' => now(),
            ],
            [
                'name' => 'Otomotiv',
                'title' => 'Otomotiv ve Mobilite Çözümleri',
                'icon' => 'car',
                'description' => 'Otomobil üreticileri, tedarikçiler, elektrikli araç şirketleri ve otomotiv teknolojileri için danışmanlık.',
                'services' => [
                    ['service' => 'Dijital Dönüşüm'],
                    ['service' => 'İş Geliştirme'],
                    ['service' => 'Stratejik Planlama'],
                    ['service' => 'M&A'],
                ],
                'color' => 'from-red-500 to-red-700',
                'is_published' => true,
                'is_featured' => false,
                'sort_order' => 3,
                'published_at' => now(),
            ],
            [
                'name' => 'Endüstri',
                'title' => 'Endüstriyel Üretim ve Verimlilik',
                'icon' => 'factory',
                'description' => 'Üretim şirketleri, endüstriyel firmalar, tedarik zinciri yönetimi ve operasyonel verimlilik için danışmanlık.',
                'services' => [
                    ['service' => 'Operasyonel Mükemmellik'],
                    ['service' => 'Süreç Optimizasyonu'],
                    ['service' => 'Maliyet Analizi'],
                    ['service' => 'Büyüme Stratejileri'],
                ],
                'color' => 'from-amber-500 to-orange-600',
                'is_published' => true,
                'is_featured' => false,
                'sort_order' => 4,
                'published_at' => now(),
            ],
            [
                'name' => 'Denizcilik',
                'title' => 'Denizcilik ve Deniz Teknolojileri',
                'icon' => 'anchor',
                'description' => 'Gemi şirketleri, liman operatörleri, deniz taşımacılığı ve denizcilik teknolojileri için danışmanlık.',
                'services' => [
                    ['service' => 'Stratejik Planlama'],
                    ['service' => 'İş Geliştirme'],
                    ['service' => 'Operasyonel Mükemmellik'],
                    ['service' => 'M&A'],
                ],
                'color' => 'from-cyan-500 to-blue-600',
                'is_published' => true,
                'is_featured' => false,
                'sort_order' => 5,
                'published_at' => now(),
            ],
            [
                'name' => 'Demiryolu',
                'title' => 'Demiryolu ve Ulaşım Sistemleri',
                'icon' => 'train',
                'description' => 'Demiryolu şirketleri, altyapı operatörleri, raylı sistem teknolojileri ve ulaşım çözümleri için danışmanlık.',
                'services' => [
                    ['service' => 'Proje Finansmanı'],
                    ['service' => 'Stratejik Planlama'],
                    ['service' => 'Operasyonel Mükemmellik'],
                    ['service' => 'M&A'],
                ],
                'color' => 'from-emerald-500 to-green-600',
                'is_published' => true,
                'is_featured' => false,
                'sort_order' => 6,
                'published_at' => now(),
            ],
            [
                'name' => 'Telekom',
                'title' => 'Telekomünikasyon ve İletişim',
                'icon' => 'signal',
                'description' => 'Telekomünikasyon şirketleri, internet servis sağlayıcıları ve iletişim teknolojileri için danışmanlık.',
                'services' => [
                    ['service' => 'Dijital Dönüşüm'],
                    ['service' => 'Stratejik Planlama'],
                    ['service' => 'M&A'],
                    ['service' => 'Due Diligence'],
                ],
                'color' => 'from-violet-500 to-purple-600',
                'is_published' => true,
                'is_featured' => false,
                'sort_order' => 7,
                'published_at' => now(),
            ],
            [
                'name' => 'Yazılım & App',
                'title' => 'Yazılım ve Mobil Uygulamalar',
                'icon' => 'code',
                'description' => 'Yazılım şirketleri, mobil uygulama geliştiricileri, SaaS firmaları ve teknoloji startup\'ları için danışmanlık.',
                'services' => [
                    ['service' => 'Venture Capital'],
                    ['service' => 'İş Geliştirme'],
                    ['service' => 'M&A'],
                    ['service' => 'Stratejik Ortaklıklar'],
                ],
                'color' => 'from-pink-500 to-rose-600',
                'is_published' => true,
                'is_featured' => false,
                'sort_order' => 8,
                'published_at' => now(),
            ],
        ];

        foreach ($sectors as $sector) {
            Sector::create($sector);
        }
    }
}
