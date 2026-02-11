# Personal Website Portfolio - Laravel 11

Website portfolio pribadi modern dengan animasi interaktif menggunakan Laravel 11.

## Fitur

- ✨ Hero section dengan particle background & typing animation
- 📝 About section dengan timeline & counter animation
- 🎨 Skills section dengan progress bars & flip cards
- 💼 Portfolio/Projects dengan filter & modal
- 📧 Contact form dengan validasi
- 🌓 Dark/Light mode toggle
- 📱 Fully responsive design
- 🎭 Smooth animations & transitions

## Teknologi

- Laravel 11
- Tailwind CSS
- Alpine.js
- AOS (Animate On Scroll)
- Particles.js
- Font Awesome Icons

## Instalasi

1. Clone atau download project ini
2. Install dependencies:
```bash
composer install
npm install
```

3. Copy .env file:
```bash
cp .env.example .env
```

4. Generate app key:
```bash
php artisan key:generate
```

5. Compile assets:
```bash
npm run dev
```

6. Jalankan server:
```bash
php artisan serve
```

7. Buka browser: `http://localhost:8000`

## Kustomisasi

Edit file berikut untuk menyesuaikan dengan data pribadi Anda:

- `resources/views/welcome.blade.php` - Konten utama
- `public/css/custom.css` - Style tambahan
- `public/js/custom.js` - JavaScript kustom

## Deployment

Untuk production:
```bash
npm run build
php artisan optimize
```

## Lisensi

Open source - silakan modifikasi sesuai kebutuhan Anda.
