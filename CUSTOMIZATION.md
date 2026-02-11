# Panduan Kustomisasi Website Portfolio

## Daftar Isi

- [Mengubah Informasi Pribadi](#mengubah-informasi-pribadi)
- [Mengganti Warna Tema](#mengganti-warna-tema)
- [Menambah/Mengedit Section](#menambahmengedit-section)
- [Kustomisasi Animasi](#kustomisasi-animasi)
- [Menambah Fitur Baru](#menambah-fitur-baru)

## Mengubah Informasi Pribadi

### 1. Hero Section (Halaman Utama)

File: `resources/views/welcome.blade.php`

```html
<!-- Baris 45-52 -->
<h1 class="text-5xl md:text-7xl font-bold font-heading text-gray-900 dark:text-white mb-4">
    Hi, I'm <span class="gradient-text">NAMA ANDA</span>
</h1>
```

**Ganti di app.js** untuk typing effect:

File: `resources/js/app.js` (Baris 78-84)

```javascript
strings: [
    'Web Developer',           // Ganti dengan profesi Anda
    'UI/UX Designer',
    'Laravel Programmer',
    'Creative Thinker'
],
```

### 2. About Section

```html
<!-- Baris 126-140 -->
<p class="text-gray-600 dark:text-gray-400 mb-4 leading-relaxed">
    GANTI DENGAN BIO ANDA
</p>

<!-- Info Pribadi - Baris 142-158 -->
<div class="grid grid-cols-2 gap-4 mb-6">
    <div>
        <p class="text-gray-600 dark:text-gray-400">
            <strong>Name:</strong> NAMA ANDA
        </p>
    </div>
    <div>
        <p class="text-gray-600 dark:text-gray-400">
            <strong>Email:</strong> EMAIL ANDA
        </p>
    </div>
    <!-- dst... -->
</div>
```

### 3. Statistik Counter

```html
<!-- Baris 169-188 -->
<span class="counter" data-target="50">0</span>+  <!-- Ganti angka 50 -->
<p>Projects Completed</p>  <!-- Ganti label -->
```

## Mengganti Warna Tema

### 1. Warna Primary

File: `tailwind.config.js`

```javascript
colors: {
    primary: {
        50: '#f0f9ff',   // Warna paling terang
        100: '#e0f2fe',
        200: '#bae6fd',
        300: '#7dd3fc',
        400: '#38bdf8',
        500: '#0ea5e9',  // Warna utama (default biru)
        600: '#0284c7',  // Ganti semua nilai ini
        700: '#0369a1',
        800: '#075985',
        900: '#0c4a6e',  // Warna paling gelap
    },
},
```

**Tool untuk generate warna**: https://uicolors.app/create

### 2. Gradient Colors

File: `resources/css/app.css` (Baris 36-38)

```css
.gradient-text {
    @apply bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent;
}
```

Ganti `purple-600` dengan warna yang Anda inginkan (misal: `pink-600`, `red-600`, dll)

### 3. Particles Color

File: `resources/js/app.js` (Baris 16)

```javascript
color: {
    value: '#0ea5e9'  // Ganti dengan kode warna hex
},
```

## Menambah/Mengedit Section

### 1. Menambah Section Baru

Template section:

```html
<!-- Section Baru -->
<section id="section-id" class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="section-title">Judul Section</h2>
            <p class="section-subtitle">Subtitle section</p>
        </div>

        <!-- Konten section -->
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Item 1 -->
            <div class="card p-6" data-aos="fade-right">
                <h3>Item 1</h3>
                <p>Deskripsi item 1</p>
            </div>

            <!-- Item 2 -->
            <div class="card p-6" data-aos="fade-left">
                <h3>Item 2</h3>
                <p>Deskripsi item 2</p>
            </div>
        </div>
    </div>
</section>
```

**Jangan lupa tambahkan link di navbar!**

### 2. Edit Timeline

```html
<!-- Baris 190-243 -->
<div class="relative" data-aos="fade-left">
    <div class="card p-6">
        <span class="text-sm text-primary-600">TAHUN</span>
        <h4 class="text-xl font-bold mt-2 mb-2">POSISI/PENDIDIKAN</h4>
        <p class="text-gray-600 mb-2">PERUSAHAAN/INSTITUSI</p>
        <p class="text-gray-600">DESKRIPSI</p>
    </div>
</div>
```

### 3. Edit Skills

**Tambah kategori skill baru:**

```html
<!-- Copy struktur ini dan sesuaikan -->
<div class="skill-card" data-aos="flip-left">
    <div class="text-center mb-6">
        <div class="w-20 h-20 bg-gradient-to-br from-WARNA1 to-WARNA2 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-ICON text-3xl text-white"></i>
        </div>
        <h3 class="text-2xl font-bold">KATEGORI SKILL</h3>
    </div>
    
    <div class="space-y-4">
        <!-- Skill item -->
        <div>
            <div class="flex justify-between mb-2">
                <span>NAMA SKILL</span>
                <span>90%</span>
            </div>
            <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden progress-bar">
                <div class="h-full bg-gradient-to-r from-WARNA1 to-WARNA2 rounded-full" style="width: 90%"></div>
            </div>
        </div>
    </div>
</div>
```

### 4. Edit Portfolio Items

```html
<!-- Baris 485-545 per item -->
<div class="group relative overflow-hidden rounded-2xl shadow-lg" data-aos="zoom-in">
    <img src="URL_GAMBAR_PROJECT" alt="Project Name" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
    
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
            <h3 class="text-xl font-bold mb-2">NAMA PROJECT</h3>
            <p class="text-sm mb-4">DESKRIPSI PROJECT</p>
            
            <div class="flex gap-2">
                <a href="URL_DEMO" class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded-lg">
                    <i class="fas fa-eye mr-2"></i>View
                </a>
                <a href="URL_GITHUB" class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded-lg">
                    <i class="fab fa-github mr-2"></i>Code
                </a>
            </div>
        </div>
    </div>
    
    <!-- Badge kategori -->
    <div class="absolute top-4 right-4">
        <span class="px-3 py-1 bg-blue-500 text-white text-xs font-semibold rounded-full">
            KATEGORI
        </span>
    </div>
</div>
```

## Kustomisasi Animasi

### 1. Mengubah Kecepatan Animasi AOS

File: `resources/js/app.js` (Baris 10-13)

```javascript
AOS.init({
    duration: 1000,  // Durasi animasi (ms) - ganti angka ini
    once: true,      // Animasi hanya sekali
    offset: 100,     // Offset dari viewport (px)
});
```

### 2. Jenis Animasi yang Tersedia

Gunakan attribute `data-aos` di HTML:

```html
<!-- Fade -->
data-aos="fade-up"
data-aos="fade-down"
data-aos="fade-left"
data-aos="fade-right"

<!-- Zoom -->
data-aos="zoom-in"
data-aos="zoom-out"

<!-- Flip -->
data-aos="flip-left"
data-aos="flip-right"
data-aos="flip-up"

<!-- Slide -->
data-aos="slide-up"
data-aos="slide-down"
```

**Delay animasi:**

```html
data-aos="fade-up" data-aos-delay="100"  <!-- Delay 100ms -->
data-aos="fade-up" data-aos-delay="200"  <!-- Delay 200ms -->
```

### 3. Custom Animation

Tambahkan di `resources/css/app.css`:

```css
@keyframes customAnimation {
  0% { 
    opacity: 0; 
    transform: translateX(-50px) rotate(0deg);
  }
  100% { 
    opacity: 1; 
    transform: translateX(0) rotate(360deg);
  }
}

.animate-custom {
  animation: customAnimation 1s ease-in-out;
}
```

Gunakan di HTML:

```html
<div class="animate-custom">Konten dengan animasi custom</div>
```

## Menambah Fitur Baru

### 1. Blog Section

Buat file baru: `resources/views/components/blog-card.blade.php`

```html
<div class="card p-6" data-aos="fade-up">
    <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-48 object-cover rounded-lg mb-4">
    <span class="text-xs text-primary-600 font-semibold">{{ $category }}</span>
    <h3 class="text-xl font-bold mt-2 mb-2">{{ $title }}</h3>
    <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $excerpt }}</p>
    <a href="{{ $url }}" class="text-primary-600 hover:text-primary-700 font-semibold">
        Read More <i class="fas fa-arrow-right ml-1"></i>
    </a>
</div>
```

Gunakan di `welcome.blade.php`:

```html
<section id="blog" class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-6">
        <h2 class="section-title">Latest Blog Posts</h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            <x-blog-card 
                image="URL_IMAGE"
                category="Laravel"
                title="Title Blog"
                excerpt="Excerpt blog..."
                url="/blog/slug"
            />
        </div>
    </div>
</section>
```

### 2. Testimonial Slider

Install Swiper:

```bash
npm install swiper
```

Import di `resources/js/app.js`:

```javascript
import Swiper from 'swiper';
import 'swiper/css';

new Swiper('.testimonial-slider', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 3000,
    },
});
```

HTML:

```html
<div class="swiper testimonial-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="card p-8 text-center">
                <p class="text-gray-600 italic mb-4">"Testimonial text..."</p>
                <h4 class="font-bold">Client Name</h4>
                <p class="text-sm text-gray-500">Position</p>
            </div>
        </div>
        <!-- Slide lainnya -->
    </div>
</div>
```

### 3. Loading Lebih Lama

File: `resources/js/app.js` (Baris 155)

```javascript
setTimeout(() => {
    loader.style.opacity = '0';
    setTimeout(() => {
        loader.style.display = 'none';
    }, 500);
}, 2000);  // Ganti 1000 jadi 2000 (2 detik)
```

## Icon Font Awesome

List icon yang bisa digunakan: https://fontawesome.com/icons

Contoh penggunaan:

```html
<i class="fas fa-code"></i>        <!-- Solid -->
<i class="fab fa-github"></i>      <!-- Brand -->
<i class="far fa-heart"></i>       <!-- Regular -->
```

## Tips Tambahan

1. **Compress Gambar**: Gunakan TinyPNG sebelum upload
2. **Lazy Loading**: Tambahkan `loading="lazy"` pada tag `<img>`
3. **SEO**: Edit meta tags di `<head>` untuk SEO lebih baik
4. **Analytics**: Tambahkan Google Analytics script di `<head>`

---

**Happy Coding! 🚀**
