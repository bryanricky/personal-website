# 🚀 Quick Start Guide

Panduan super cepat untuk menjalankan website portfolio Anda dalam 5 menit!

## ⚡ Instalasi Express (5 Menit)

### 1️⃣ Extract File

```bash
# Extract ZIP file yang sudah di-download
unzip personal-website-laravel.zip
cd personal-website
```

### 2️⃣ Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install
```

> **Catatan**: Proses install bisa memakan waktu 2-3 menit tergantung koneksi internet.

### 3️⃣ Setup Environment

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4️⃣ Jalankan!

**Terminal 1** - Compile assets:
```bash
npm run dev
```

**Terminal 2** - Jalankan server:
```bash
php artisan serve
```

### 5️⃣ Buka Browser

Akses: **http://localhost:8000**

🎉 **Done!** Website sudah jalan!

---

## 📝 Kustomisasi Cepat

### Ganti Nama & Info

Edit file: `resources/views/welcome.blade.php`

**Baris 49** - Ganti nama Anda:
```html
Hi, I'm <span class="gradient-text">NAMA ANDA</span>
```

**Baris 146-157** - Update info pribadi:
```html
<strong>Name:</strong> NAMA ANDA
<strong>Email:</strong> EMAIL ANDA
<strong>Location:</strong> KOTA ANDA
```

### Ganti Profesi di Typing Animation

Edit file: `resources/js/app.js` **Baris 78-84**:

```javascript
strings: [
    'Web Developer',      // Ganti ini
    'UI/UX Designer',     // Ganti ini
    'Web Developer',
    'Creative Thinker'
],
```

Refresh browser (atau restart `npm run dev`).

### Ganti Warna Tema

Edit file: `tailwind.config.js` **Baris 11**:

```javascript
primary: {
    500: '#0ea5e9',  // Warna utama - ganti dengan kode hex warna favorit
}
```

Contoh warna:
- Merah: `#ef4444`
- Hijau: `#10b981`
- Ungu: `#8b5cf6`
- Orange: `#f97316`

---

## 🔧 Troubleshooting

### Error: "Class not found"
```bash
composer dump-autoload
```

### Error: npm
```bash
rm -rf node_modules package-lock.json
npm install
```

### Port sudah digunakan
```bash
php artisan serve --port=8001
```

### Permission denied (Linux/Mac)
```bash
chmod -R 755 storage bootstrap/cache
```

---

## 📚 Next Steps

Setelah website jalan, baca dokumentasi lengkap:

1. **INSTALL.md** - Panduan instalasi detail
2. **CUSTOMIZATION.md** - Cara kustomisasi mendalam
3. **FEATURES.md** - Daftar semua fitur

---

## 🎯 Checklist Kustomisasi

- [ ] Ganti nama dan bio
- [ ] Update foto profil
- [ ] Sesuaikan skill & persentase
- [ ] Tambahkan portfolio/projects
- [ ] Update contact information
- [ ] Ganti social media links
- [ ] Sesuaikan warna tema
- [ ] Edit timeline pengalaman
- [ ] Update meta tags untuk SEO
- [ ] Test di mobile

---

## 💡 Tips Pro

1. **Gunakan placeholder image** dari:
   - UI Avatars: `https://ui-avatars.com/api/?name=Your+Name`
   - Unsplash: `https://source.unsplash.com/800x600/?tech`

2. **Test responsive** dengan DevTools (F12 > Toggle Device Toolbar)

3. **Dark mode** akan tersimpan otomatis di browser

4. **Hot reload** aktif saat `npm run dev` jalan - edit file langsung terlihat!

---

## 🚀 Deploy ke Production

Untuk production (setelah selesai kustomisasi):

```bash
# Build assets
npm run build

# Optimize Laravel
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

Upload ke hosting pilihan Anda!

---

## 📞 Need Help?

- Baca **INSTALL.md** untuk troubleshooting
- Baca **CUSTOMIZATION.md** untuk custom lebih lanjut
- Cek dokumentasi Laravel: https://laravel.com/docs
- Cek dokumentasi Tailwind: https://tailwindcss.com/docs

---

**Selamat berkreasi! 🎨**
