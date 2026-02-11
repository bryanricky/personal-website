# Panduan Instalasi Website Portfolio Laravel 11

## Persyaratan Sistem

Sebelum memulai instalasi, pastikan sistem Anda memiliki:

- **PHP** >= 8.2
- **Composer** (untuk manajemen package PHP)
- **Node.js** >= 18.x dan NPM (untuk manajemen package JavaScript)
- **MySQL** / **PostgreSQL** / **SQLite** (database - opsional untuk website statis)

### Cek Versi

Cek versi yang terinstall:

```bash
php --version
composer --version
node --version
npm --version
```

## Langkah Instalasi

### 1. Download/Clone Project

```bash
# Jika dari Git
git clone <repository-url> personal-website
cd personal-website

# Atau extract file ZIP ke folder personal-website
```

### 2. Install Dependencies PHP

```bash
composer install
```

**Catatan:** Jika mendapat error, pastikan ekstensi PHP yang diperlukan sudah aktif:
- `php-mbstring`
- `php-xml`
- `php-curl`
- `php-zip`

### 3. Install Dependencies JavaScript

```bash
npm install
```

### 4. Setup Environment

```bash
# Copy file .env.example ke .env
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Konfigurasi Database (Opsional)

Edit file `.env` jika ingin menggunakan database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio_db
DB_USERNAME=root
DB_PASSWORD=your_password
```

Atau gunakan SQLite (lebih simple untuk portfolio):

```env
DB_CONNECTION=sqlite
```

Lalu buat file database:

```bash
touch database/database.sqlite
php artisan migrate
```

### 6. Compile Assets

**Development mode** (dengan hot reload):

```bash
npm run dev
```

**Production mode** (file teroptimasi):

```bash
npm run build
```

### 7. Jalankan Server

Buka terminal baru (biarkan `npm run dev` tetap jalan) dan jalankan:

```bash
php artisan serve
```

Website akan berjalan di: **http://localhost:8000**

## Kustomisasi Konten

### 1. Informasi Pribadi

Edit file `resources/views/welcome.blade.php`:

- **Baris 49-52**: Ganti nama dan deskripsi di Hero Section
- **Baris 126-140**: Update informasi About Me
- **Baris 142-158**: Sesuaikan detail pribadi (nama, email, lokasi)
- **Baris 171-244**: Edit timeline pengalaman/pendidikan

### 2. Foto Profil

Ganti URL foto di:

```html
<!-- Baris 45 di welcome.blade.php -->
<img src="URL_FOTO_ANDA" alt="Profile" ...>

<!-- Baris 121 di welcome.blade.php -->
<img src="URL_FOTO_ABOUT_ANDA" alt="About" ...>
```

### 3. Skills

Edit section skills di baris 283-425 di file `welcome.blade.php`:

- Ubah persentase skill
- Tambah/kurangi skill
- Ganti icon teknologi

### 4. Portfolio/Projects

Edit section portfolio di baris 454-645:

- Ganti gambar project
- Update judul dan deskripsi
- Tambah link ke project/GitHub

### 5. Social Media Links

Update link sosial media:

- Hero section: Baris 66-85
- About section: Baris 164
- Contact section: Baris 726-746
- Footer: Baris 796-809

### 6. Contact Information

Edit informasi kontak di baris 687-720:

- Email
- Nomor telepon
- Alamat

## Optimasi untuk Production

### 1. Build Assets

```bash
npm run build
```

### 2. Optimize Laravel

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

### 3. Setup .env untuk Production

```env
APP_ENV=production
APP_DEBUG=false
```

## Deploy ke Hosting

### Hosting Shared (cPanel)

1. Upload semua file kecuali folder `node_modules` dan `vendor`
2. Jalankan `composer install --optimize-autoloader --no-dev` di terminal
3. Jalankan `npm install && npm run build`
4. Set document root ke folder `public`
5. Copy file `.env.example` ke `.env` dan sesuaikan
6. Jalankan `php artisan key:generate`

### VPS (Ubuntu/Debian)

```bash
# Install dependencies
sudo apt update
sudo apt install php8.2 php8.2-cli php8.2-mbstring php8.2-xml php8.2-curl nginx mysql-server

# Setup Nginx
sudo nano /etc/nginx/sites-available/portfolio

# Isi dengan konfigurasi Laravel
# Restart Nginx
sudo systemctl restart nginx

# Clone dan setup project
cd /var/www
git clone <repo-url> portfolio
cd portfolio
composer install --optimize-autoloader --no-dev
npm install && npm run build
php artisan key:generate
php artisan optimize
```

### Vercel/Netlify (Static Export)

Website ini adalah SPA, bisa di-export sebagai static site untuk deploy ke Vercel/Netlify.

## Troubleshooting

### Error: "Class not found"

```bash
composer dump-autoload
```

### Error: NPM/Node

```bash
rm -rf node_modules package-lock.json
npm install
```

### Error: Permission Denied

```bash
chmod -R 755 storage bootstrap/cache
```

### Port 8000 sudah digunakan

```bash
php artisan serve --port=8001
```

## Tips Pengembangan

1. **Hot Reload**: Gunakan `npm run dev` saat development
2. **Dark Mode**: Toggle sudah otomatis tersimpan di localStorage
3. **Animasi**: Gunakan AOS attributes untuk animasi scroll
4. **Responsive**: Sudah responsive, test dengan browser DevTools

## Support

Jika ada pertanyaan atau masalah:
1. Cek dokumentasi Laravel: https://laravel.com/docs
2. Cek dokumentasi Tailwind: https://tailwindcss.com/docs
3. Buat issue di repository

---

**Selamat menggunakan! 🎉**
