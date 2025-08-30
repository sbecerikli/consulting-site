# 🚀 Hostinger Deployment Rehberi

## 📋 **Gereksinimler:**
- Hostinger hosting planı (PHP 8.2+ destekli)
- MySQL/MariaDB veritabanı
- SSH erişimi (önerilen)

## 🔧 **Hostinger'da Yapılacaklar:**

### **1. Hosting Kontrol Paneli:**
- **Domain:** Sitenizin domain'ini seçin
- **PHP Version:** 8.2 veya üzeri seçin
- **MySQL:** Yeni veritabanı oluşturun

### **2. Veritabanı Bilgileri:**
```
Host: localhost (veya Hostinger'ın verdiği host)
Database: [veritabanı_adı]
Username: [kullanıcı_adı]
Password: [şifre]
```

### **3. Dosya Yükleme:**
- **FTP/File Manager** ile dosyaları yükleyin
- **public_html** klasörüne yükleyin

## 📁 **Dosya Yapısı:**

```
public_html/
├── app/
├── bootstrap/
├── config/
├── database/
├── lang/
├── resources/
├── routes/
├── storage/
├── vendor/
├── .env
├── artisan
└── composer.json
```

## ⚙️ **Environment Ayarları (.env):**

```env
APP_NAME="EMT Dinamik"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=u308434905_emt
DB_USERNAME=u308434905_emt
DB_PASSWORD=e3iawCF?

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync
```

## 🔑 **Gerekli Komutlar:**

```bash
# Composer dependencies
composer install --optimize-autoloader --no-dev

# Laravel key generate
php artisan key:generate

# Veritabanı migration
php artisan migrate

# Cache optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Storage link
php artisan storage:link

# Permissions
chmod -R 755 storage bootstrap/cache
```

## 📝 **Önemli Notlar:**

1. **Storage klasörü** yazılabilir olmalı
2. **Bootstrap/cache** yazılabilir olmalı
3. **Debug mode** kapalı olmalı
4. **HTTPS** kullanın
5. **Backup** alın

## 🚨 **Güvenlik:**
- `.env` dosyası public erişimde olmamalı
- `storage` klasörü public erişimde olmamalı
- Admin paneli güvenli şifre ile korunmalı

## 📞 **Destek:**
- Hostinger support: https://support.hostinger.com
- Laravel docs: https://laravel.com/docs
