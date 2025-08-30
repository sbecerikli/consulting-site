# ✅ Hostinger Deployment Checklist

## 🚀 **Pre-Deployment (Yerel):**
- [x] Production build yapıldı (`npm run build`)
- [x] Composer dependencies optimize edildi (`composer install --optimize-autoloader --no-dev`)
- [x] Laravel cache'ler optimize edildi
- [x] `.env.production` dosyası hazırlandı

## 🔧 **Hostinger Hosting:**
- [ ] Hosting planı seçildi (PHP 8.2+)
- [ ] Domain ayarlandı
- [ ] MySQL veritabanı oluşturuldu
- [ ] PHP version 8.2+ seçildi

## 📁 **Dosya Yükleme:**
- [ ] Tüm proje dosyaları `public_html` klasörüne yüklendi
- [ ] `.env` dosyası production ayarları ile güncellendi
- [ ] `storage` klasörü yazılabilir yapıldı
- [ ] `bootstrap/cache` klasörü yazılabilir yapıldı

## ⚙️ **Server Konfigürasyonu:**
- [ ] Laravel key generate edildi (`php artisan key:generate`)
- [ ] Veritabanı migration yapıldı (`php artisan migrate`)
- [ ] Storage link oluşturuldu (`php artisan storage:link`)
- [ ] Cache'ler optimize edildi
- [ ] Permissions ayarlandı (`chmod -R 755 storage bootstrap/cache`)

## 🔒 **Güvenlik:**
- [ ] Debug mode kapalı (`APP_DEBUG=false`)
- [ ] `.env` dosyası public erişimde değil
- [ ] Admin paneli güvenli şifre ile korunuyor
- [ ] HTTPS aktif

## 📱 **Test:**
- [ ] Ana sayfa açılıyor
- [ ] Çoklu dil desteği çalışıyor (TR/EN)
- [ ] Admin paneli erişilebilir
- [ ] Formlar çalışıyor
- [ ] Responsive tasarım çalışıyor

## 🚨 **Kritik Kontroller:**
- [ ] Veritabanı bağlantısı çalışıyor
- [ ] File uploads çalışıyor
- [ ] Email gönderimi çalışıyor (gerekirse)
- [ ] SSL sertifikası aktif
- [ ] Backup alındı

## 📞 **Destek:**
- Hostinger Support: https://support.hostinger.com
- Laravel Docs: https://laravel.com/docs
- Deployment Issues: Check Laravel logs in `storage/logs/`
