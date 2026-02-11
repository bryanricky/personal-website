<!DOCTYPE html>

<html lang="id" x-data="{ darkMode: false }" :class="{ 'dark': darkMode }" x-init="
    darkMode = localStorage.getItem('darkMode') === 'true';
    $watch('darkMode', value => localStorage.setItem('darkMode', value))
">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio - Bryan Ricky</title>
    <meta name="description" content="Portfolio pribadi - Web Developer & Designer">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>💼</text></svg>">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
    AOS.init({
        duration: 1000,
        once: true
    });
    </script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


</head>

<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    
    <!-- Loading Screen -->
    <div id="loader" class="fixed inset-0 bg-white dark:bg-gray-900 z-50 flex items-center justify-center">
        <div class="text-center">
            <div class="loader mx-auto mb-4"></div>
            <p class="text-gray-600 dark:text-gray-400 font-medium">Loading...</p>
        </div>
    </div>

    <!-- Navbar -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-40 transition-all duration-300 bg-white/90 dark:bg-gray-900/90">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="#home" class="text-2xl font-bold font-heading gradient-text">
                    Portfolio
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="navbar-link">Home</a>
                    <a href="#about" class="navbar-link">About</a>
                    <a href="#skills" class="navbar-link">Skills</a>
                    <a href="#portfolio" class="navbar-link">Portfolio</a>
                    <a href="#contact" class="navbar-link">Contact</a>
                    
                    <!-- Dark Mode Toggle -->
                    <button @click="darkMode = !darkMode" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 transition-colors">
                        <i class="fas fa-sun text-yellow-500" x-show="!darkMode"></i>
                        <i class="fas fa-moon text-blue-400" x-show="darkMode" x-cloak></i>
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="$refs.mobileMenu.classList.toggle('hidden')" class="md:hidden p-2">
                    <i class="fas fa-bars text-2xl text-gray-700 dark:text-gray-300"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-ref="mobileMenu" class="hidden md:hidden bg-white dark:bg-gray-900 border-t dark:border-gray-800">
            <div class="container mx-auto px-6 py-4 space-y-3">
                <a href="#home" class="block py-2 navbar-link">Home</a>
                <a href="#about" class="block py-2 navbar-link">About</a>
                <a href="#skills" class="block py-2 navbar-link">Skills</a>
                <a href="#portfolio" class="block py-2 navbar-link">Portfolio</a>
                <a href="#contact" class="block py-2 navbar-link">Contact</a>
                <button @click="darkMode = !darkMode" class="w-full text-left py-2 navbar-link">
                    <i class="fas fa-adjust mr-2"></i> Toggle Dark Mode
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
        <div id="particles-js"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center" data-aos="fade-up">
                <div class="mb-6">
                    <img src="/img/Foto-header/Bryan.png"
                        alt="Profile" 
                        class="w-32 h-32 md:w-40 md:h-40 rounded-full mx-auto shadow-2xl 
                                border-4 border-white dark:border-gray-800 animate-float object-cover">
                </div>

                
                <h1 class="text-5xl md:text-7xl font-bold font-heading text-gray-900 dark:text-white mb-4">
                    Hallo, Saya <span class="gradient-text">Bryan Ricky Christoffel</span>
                </h1>
                
                <div class="text-2xl md:text-3xl text-gray-600 dark:text-gray-400 mb-8 h-12">
                    Saya <span id="typed" class="text-primary-600 dark:text-primary-400 font-semibold"></span>
                </div>
                
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-10 max-w-2xl mx-auto">
                    Saya suka membuat aplikasi berbasis website yang menarik dan mudah digunakan, serta terus belajar teknologi web terbaru untuk meningkatkan kualitas aplikasi yang saya buat.
                </p>
                
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="#contact" class="btn-primary">
                        <i class="fas fa-envelope mr-2"></i> Get In Touch
                    </a>
                    <a href="#portfolio" class="btn-secondary">
                        <i class="fas fa-briefcase mr-2"></i> View Work
                    </a>
                </div>
                
                <!-- Social Links -->
                <div class="flex gap-4 justify-center mt-10">
                    <a href="https://github.com/bryanricky?tab=repositories" class="w-12 h-12 rounded-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center hover:bg-primary-600 hover:text-white dark:hover:bg-primary-600 transition-all duration-300 transform hover:scale-110">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/bryan-erc-46a287383" class="w-12 h-12 rounded-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center hover:bg-primary-600 hover:text-white dark:hover:bg-primary-600 transition-all duration-300 transform hover:scale-110">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                    <a href="https://x.com/ErcBryan43096" class="w-12 h-12 rounded-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center hover:bg-primary-600 hover:text-white dark:hover:bg-primary-600 transition-all duration-300 transform hover:scale-110">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="https://www.instagram.com/bryanercx" class="w-12 h-12 rounded-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center hover:bg-primary-600 hover:text-white dark:hover:bg-primary-600 transition-all duration-300 transform hover:scale-110">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#about" class="text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-400">
                <i class="fas fa-chevron-down text-3xl"></i>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="relative py-24 bg-gray-900 overflow-hidden">

        <!-- Background Coding Pattern -->
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1518770660439-4636190af475')] bg-cover bg-center opacity-10"></div>

        <div class="container mx-auto px-6 relative z-10">

            <!-- Title -->
            <div class="text-center mb-20" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-white">Tentang Saya</h2>
                <p class="text-gray-400 mt-2">Who I am and what I do</p>
            </div>

            <!-- Main Grid -->
            <div class="grid md:grid-cols-2 gap-16 items-center">

                <!-- FOTO -->
                <div data-aos="fade-right" class="relative flex justify-center">
                    <div class="absolute inset-0 bg-primary-500 blur-3xl opacity-30 rounded-full"></div>
                    <img src="/img/Foto-about-me/Bryan.png"
                        class="relative w-72 rounded-3xl border-4 border-white/20 shadow-2xl hover:scale-105 transition duration-500">
                </div>

                <!-- TEXT CONTENT -->
                <div data-aos="fade-left" class="text-white">

                    <!-- Typing Text -->
                    <h3 class="text-3xl font-bold mb-4">
                        Perkenalan singkat <span id="typing" class="text-primary-400"></span>
                    </h3>

                    <p class="text-gray-300 leading-relaxed mb-4 text-justify">
                        Halo! Perkenalkan, nama saya <b>Bryan Ricky Christoffel</b>, lulusan Sarjana Teknik Informatika Universitas PGRI Madiun 
                        (lulus tahun 2025) dengan IPK 3.68. Saya memiliki pengalaman magang di Dinas Komunikasi dan Informatika Kota Madiun, 
                        dengan proyek integrasi alat fingerprint ke dalam sistem website Warung Tekan (WARTEK).
                    </p>

                    <p class="text-gray-300 mb-6 text-justify">
                        Selama perkuliahan, saya mengerjakan berbagai proyek pengembangan aplikasi berbasis web dan mobile, 
                        sehingga memiliki pengalaman dalam membangun sistem dari perencanaan hingga implementasi. 
                        Proses belajar ini yang akhirnya membuat saya tertarik ingin menjadi pengembang website yang profesional.
                    </p>

                    <!-- Skill Tags -->
                    <div class="flex flex-wrap gap-3 mb-6">
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">Dibawah ini adalah CV saya yang bisa anda download</span>
                        
                    </div>

                    <!-- Info Grid -->
                    <div class="grid grid-cols-2 gap-4 text-gray-300 mb-6">
                        <div><b class="text-white">Name:</b> Bryan Rick Christoffel</div>
                        <div><b class="text-white">Email:</b> bryanricky11@gmail.com</div>
                        <div><b class="text-white">Location:</b> Madiun, Indonesia</div>
                        <div><b class="text-white">Freelance:</b> Available</div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex gap-4">
                        <a href="/cv/CV Bryan Ricky Christoffel.pdf" download
                        class="px-6 py-3 bg-primary-500 hover:bg-primary-600 rounded-lg text-white font-semibold transition">
                        Download CV
                        </a>

                        <a href="#contact"
                        class="px-6 py-3 border border-white/30 hover:bg-white/10 rounded-lg transition">
                        Contact Me
                        </a>
                    </div>

                    <!-- Social Icons -->
                    <div class="flex gap-5 text-2xl mt-6">
                        <a href="https://github.com/bryanricky" target="_blank" class="hover:text-primary-400"><i class="fab fa-github"></i></a>
                        <a href="#" class="hover:text-primary-400"><i class="fab fa-linkedin"></i></a>
                        <a href="mailto:bryanricky11@gmail.com" class="hover:text-primary-400"><i class="fas fa-envelope"></i></a>
                    </div>

                </div>
            </div>

            <!-- FEATURE CARDS -->
            <div class="grid md:grid-cols-3 gap-8 mt-20" data-aos="fade-up">

                <div class="bg-white/10 backdrop-blur-xl p-6 rounded-xl text-white hover:scale-105 transition">
                    <i class="fas fa-code text-3xl text-primary-400 mb-3"></i>
                    <h4 class="font-bold text-lg">Clean Code</h4>
                    <p class="text-gray-300 text-sm">Menulis kode rapi dan scalable.</p>
                </div>

                <div class="bg-white/10 backdrop-blur-xl p-6 rounded-xl text-white hover:scale-105 transition">
                    <i class="fas fa-layer-group text-3xl text-primary-400 mb-3"></i>
                    <h4 class="font-bold text-lg">Web Developer</h4>
                    <p class="text-gray-300 text-sm">Frontend & Backend modern.</p>
                </div>

                <div class="bg-white/10 backdrop-blur-xl p-6 rounded-xl text-white hover:scale-105 transition">
                    <i class="fas fa-lightbulb text-3xl text-primary-400 mb-3"></i>
                    <h4 class="font-bold text-lg">Problem Solver</h4>
                    <p class="text-gray-300 text-sm">Suka mencari solusi teknis.</p>
                </div>

            </div>

        </div>

        <!-- Stats Counter -->
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid md:grid-cols-5 gap-6 mt-10" data-aos="fade-up">

                <div class="bg-white/10 backdrop-blur-lg p-6 rounded-xl text-center text-white">
                    <i class="fab fa-html5 text-4xl text-orange-500 mb-3"></i>
                    <h4 class="font-bold">Frontend</h4>
                    <p class="text-sm text-gray-300">HTML, CSS, Tailwind, JavaScript</p>
                </div>

                <div class="bg-white/10 backdrop-blur-lg p-6 rounded-xl text-center text-white">
                    <i class="fab fa-laravel text-4xl text-red-500 mb-3"></i>
                    <h4 class="font-bold">Backend</h4>
                    <p class="text-sm text-gray-300">Laravel, CodeIgniter, PHP</p>
                </div>

                <div class="bg-white/10 backdrop-blur-lg p-6 rounded-xl text-center text-white">
                    <i class="fas fa-database text-4xl text-blue-400 mb-3"></i>
                    <h4 class="font-bold">Database</h4>
                    <p class="text-sm text-gray-300">MySQL, PostgreSQL, MongoDB</p>
                </div>

                <div class="bg-white/10 backdrop-blur-lg p-6 rounded-xl text-center text-white">
                    <i class="fab fa-github text-4xl text-gray-300 mb-3"></i>
                    <h4 class="font-bold">Tools</h4>
                    <p class="text-sm text-gray-300">Git, GitHub, VS Code</p>
                </div>

                <div class="bg-white/10 backdrop-blur-lg p-6 rounded-xl text-center text-white">
                    <i class="fas fa-mobile-alt text-4xl text-cyan-400 mb-3"></i>
                    <h4 class="font-bold">Mobile Development</h4>
                    <p class="text-sm text-gray-300">Dart, Flutter</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Timeline Modern -->
    <section class="relative bg-white dark:bg-gray-900 py-20" id="journey">

        <!-- Soft Gradient Background -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(99,102,241,0.08),transparent_40%),radial-gradient(circle_at_80%_80%,rgba(236,72,153,0.08),transparent_40%)]"></div>

        <!-- Floating Blur Shapes -->
        <div class="absolute top-1/3 left-1/4 w-80 h-80 bg-indigo-400/10 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-1/3 right-1/4 w-80 h-80 bg-rose-400/10 rounded-full blur-[120px]"></div>

        <!-- Noise Texture -->
        <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-10 pointer-events-none"></div>


        <h3 class="text-4xl font-bold text-center text-gray-900 dark:text-white mb-16" data-aos="fade-up">
            Perjalanan Saya 🚀
        </h3>

        <div class="relative max-w-7xl mx-auto px-6">

            <!-- Garis Tengah -->
            <div class="absolute left-1/2 transform -translate-x-1/2 w-1 
                bg-gradient-to-b from-cyan-500 via-purple-500 to-pink-500 h-full shadow-[0_0_20px_rgba(0,255,255,0.5)]">
            </div>

            <!-- ITEM 1 -->
            <div class="flex md:justify-start justify-center mb-16 relative" data-aos="fade-right">
                <div class="w-full md:w-1/2 md:pr-10">
                    <div class="bg-white dark:bg-white/10 backdrop-blur-xl border border-gray-200 dark:border-white/20 
                        p-6 rounded-2xl shadow-xl hover:scale-105 transition">

                        <span class="text-blue-600 dark:text-blue-400 font-semibold">2021</span>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mt-2">
                            Pemrograman Dasar (Semester 1)
                        </h4>
                        <p class="text-gray-700 dark:text-gray-300 mt-2">
                            C++     
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mt-2">
                            Mempelajari konsep dasar pemrograman seperti perulangan, input-output, 
                            serta kontrol alur program (break, continue, goto). 
                            Membuat berbagai mini project seperti pola bintang dan program sederhana lainnya.
                        </p>
                    </div>
                </div>

                <!-- Dot -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 
                    bg-blue-600 dark:bg-blue-500 rounded-full border-4 border-white dark:border-gray-900 animate-pulse">
                </div>
            </div>

            <!-- ITEM 2 -->
            <div class="flex md:justify-end justify-center mb-16 relative" data-aos="fade-left">
                <div class="w-full md:w-1/2 md:pl-10">
                    <div class="bg-white dark:bg-white/10 backdrop-blur-xl border border-gray-200 dark:border-white/20 
                        p-6 rounded-2xl shadow-xl hover:scale-105 transition">

                        <span class="text-yellow-600 dark:text-yellow-400 font-semibold">2022</span>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mt-2">
                            Pemrograman Dasar Lanjutan (Semester 2 & 3)
                        </h4>
                        <p class="text-gray-700 dark:text-gray-300 mt-2">
                            C++ • MySQL • XAMPP
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mt-2">
                            Mempelajari procedure, function, array, string, serta konsep CRUD. 
                            Mulai mengenal database MySQL dan pengelolaan data menggunakan XAMPP.
                        </p>
                    </div>
                </div>

                <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 
                    bg-yellow-600 dark:bg-yellow-500 rounded-full border-4 border-white dark:border-gray-900 animate-pulse">
                </div>
            </div>


            <!-- ITEM 3 -->
            <div class="flex md:justify-start justify-center mb-16 relative" data-aos="fade-right">
                <div class="w-full md:w-1/2 md:pr-10">
                    <div class="bg-white dark:bg-white/10 backdrop-blur-xl border border-gray-200 dark:border-white/20 
                        p-6 rounded-2xl shadow-xl hover:scale-105 transition">

                        <span class="text-cyan-600 dark:text-cyan-400 font-semibold">2023</span>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mt-2">
                            Web Developer (Semester 4 & 5)
                        </h4>
                        <p class="text-gray-700 dark:text-gray-300 mt-2">
                            Visual Basic • Java • Python • HTML • CSS • Flask • Streamlit
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mt-2">
                            Mempelajari Object Oriented Programming (OOP) dan arsitektur MVC. 
                            Mengembangkan beberapa project web dan aplikasi data menggunakan Python dan framework modern.
                        </p>
                    </div>
                </div>

                <!-- Dot -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 
                    bg-cyan-600 dark:bg-cyan-500 rounded-full border-4 border-white dark:border-gray-900 animate-pulse">
                </div>
            </div>

            <!-- ITEM 4 -->
            <div class="flex md:justify-end justify-center mb-16 relative" data-aos="fade-left">
                <div class="w-full md:w-1/2 md:pl-10">
                    <div class="bg-white dark:bg-white/10 backdrop-blur-xl border border-gray-200 dark:border-white/20 
                        p-6 rounded-2xl shadow-xl hover:scale-105 transition">

                        <span class="text-purple-600 dark:text-purple-400 font-semibold">2024</span>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mt-2">
                            Web & Mobile Developer (Semester 6 & 7)
                        </h4>
                        <p class="text-gray-700 dark:text-gray-300 mt-2">
                            PHP • JavaScript • Laravel • REST API • Dart • Flutter
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mt-2">
                            Mengembangkan website dengan Laravel dan MySQL, 
                            serta membangun aplikasi mobile menggunakan Flutter. 
                            Mulai mengintegrasikan REST API dalam project.
                        </p>
                    </div>
                </div>

                <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 
                    bg-purple-600 dark:bg-purple-500 rounded-full border-4 border-white dark:border-gray-900 animate-pulse">
                </div>
            </div>

            <!-- ITEM 5 -->
            <div class="flex md:justify-start justify-center mb-16 relative" data-aos="fade-right">
                <div class="w-full md:w-1/2 md:pr-10">
                    <div class="bg-white dark:bg-white/10 backdrop-blur-xl border border-gray-200 dark:border-white/20 
                        p-6 rounded-2xl shadow-xl hover:scale-105 transition">

                        <span class="text-pink-600 dark:text-pink-400 font-semibold">2025</span>
                       <h4 class="text-xl font-bold text-gray-900 dark:text-white mt-2">
                            Web Developer & Final Project (Semester 8)
                        </h4>
                        <p class="text-gray-700 dark:text-gray-300 mt-2">
                            PHP • JavaScript • Laravel • CodeIgniter
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mt-2">
                            Merancang dan membangun sistem Point of Sale berbasis Progressive Web App (PWA) 
                            sebagai project skripsi dengan studi kasus Toko Ridho.
                        </p>
                    </div>
                </div>

                <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 
                    bg-pink-600 dark:bg-pink-500 rounded-full border-4 border-white dark:border-gray-900 animate-pulse">
                </div>
            </div>

        </div>

    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="section-title">Keahlian Saya</h2>
                <p class="section-subtitle">What I'm good at</p>
            </div>

            <!-- Skill Categories -->
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <!-- Frontend -->
                <div class="skill-card" data-aos="flip-left">
                    <div class="text-center mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-code text-3xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Frontend</h3>
                    </div>
                    
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">HTML/CSS</span>
                                <span class="text-primary-600 dark:text-primary-400 font-semibold">95%</span>
                            </div>
                            <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden progress-bar">
                                <div class="h-full bg-gradient-to-r from-blue-500 to-purple-600 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">JavaScript</span>
                                <span class="text-primary-600 dark:text-primary-400 font-semibold">90%</span>
                            </div>
                            <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden progress-bar">
                                <div class="h-full bg-gradient-to-r from-blue-500 to-purple-600 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">React/Vue</span>
                                <span class="text-primary-600 dark:text-primary-400 font-semibold">85%</span>
                            </div>
                            <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden progress-bar">
                                <div class="h-full bg-gradient-to-r from-blue-500 to-purple-600 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Backend -->
                <div class="skill-card" data-aos="flip-left" data-aos-delay="100">
                    <div class="text-center mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-teal-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-server text-3xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Backend</h3>
                    </div>
                    
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">PHP/Laravel</span>
                                <span class="text-primary-600 dark:text-primary-400 font-semibold">92%</span>
                            </div>
                            <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden progress-bar">
                                <div class="h-full bg-gradient-to-r from-green-500 to-teal-600 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Node.js</span>
                                <span class="text-primary-600 dark:text-primary-400 font-semibold">80%</span>
                            </div>
                            <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden progress-bar">
                                <div class="h-full bg-gradient-to-r from-green-500 to-teal-600 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">MySQL/PostgreSQL</span>
                                <span class="text-primary-600 dark:text-primary-400 font-semibold">88%</span>
                            </div>
                            <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden progress-bar">
                                <div class="h-full bg-gradient-to-r from-green-500 to-teal-600 rounded-full" style="width: 88%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tools -->
                <div class="skill-card" data-aos="flip-left" data-aos-delay="200">
                    <div class="text-center mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-tools text-3xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Tools</h3>
                    </div>
                    
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Git/GitHub</span>
                                <span class="text-primary-600 dark:text-primary-400 font-semibold">90%</span>
                            </div>
                            <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden progress-bar">
                                <div class="h-full bg-gradient-to-r from-orange-500 to-red-600 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Docker</span>
                                <span class="text-primary-600 dark:text-primary-400 font-semibold">75%</span>
                            </div>
                            <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden progress-bar">
                                <div class="h-full bg-gradient-to-r from-orange-500 to-red-600 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Figma/Adobe XD</span>
                                <span class="text-primary-600 dark:text-primary-400 font-semibold">85%</span>
                            </div>
                            <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden progress-bar">
                                <div class="h-full bg-gradient-to-r from-orange-500 to-red-600 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tech Stack Icons -->
            <div class="text-center" data-aos="fade-up">
                <h3 class="text-2xl font-bold font-heading text-gray-900 dark:text-white mb-8">Technologies I Use</h3>
                <div class="flex flex-wrap justify-center gap-6">
                    <div class="w-20 h-20 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center transform hover:scale-110 hover:shadow-xl transition-all duration-300">
                        <i class="fab fa-laravel text-4xl text-red-500"></i>
                    </div>
                    <div class="w-20 h-20 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center transform hover:scale-110 hover:shadow-xl transition-all duration-300">
                        <i class="fab fa-react text-4xl text-blue-500"></i>
                    </div>
                    <div class="w-20 h-20 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center transform hover:scale-110 hover:shadow-xl transition-all duration-300">
                        <i class="fab fa-vuejs text-4xl text-green-500"></i>
                    </div>
                    <div class="w-20 h-20 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center transform hover:scale-110 hover:shadow-xl transition-all duration-300">
                        <i class="fab fa-node-js text-4xl text-green-600"></i>
                    </div>
                    <div class="w-20 h-20 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center transform hover:scale-110 hover:shadow-xl transition-all duration-300">
                        <i class="fab fa-php text-4xl text-purple-500"></i>
                    </div>
                    <div class="w-20 h-20 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center transform hover:scale-110 hover:shadow-xl transition-all duration-300">
                        <i class="fab fa-js text-4xl text-yellow-500"></i>
                    </div>
                    <div class="w-20 h-20 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center transform hover:scale-110 hover:shadow-xl transition-all duration-300">
                        <i class="fab fa-html5 text-4xl text-orange-500"></i>
                    </div>
                    <div class="w-20 h-20 bg-white dark:bg-gray-800 rounded-xl shadow-lg flex items-center justify-center transform hover:scale-110 hover:shadow-xl transition-all duration-300">
                        <i class="fab fa-css3-alt text-4xl text-blue-600"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="section-title">Portofolio Saya</h2>
                <p class="section-subtitle">Berikut beberapa project yang pernah saya kerjakan</p>
            </div>

            <div x-data="{ activeFilter: 'all' }">

    <!-- Filter Buttons -->
    <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up">
        <button @click="activeFilter = 'all'"
            :class="activeFilter === 'all' ? 'bg-primary-600 text-white' : 'bg-gray-200 dark:bg-gray-700'"
            class="px-6 py-2 rounded-full font-semibold transition">
            All Projects
        </button>

        <button @click="activeFilter = 'web'"
            :class="activeFilter === 'web' ? 'bg-primary-600 text-white' : 'bg-gray-200 dark:bg-gray-700'"
            class="px-6 py-2 rounded-full font-semibold transition">
            Web Apps
        </button>

        <button @click="activeFilter = 'mobile'"
            :class="activeFilter === 'mobile' ? 'bg-primary-600 text-white' : 'bg-gray-200 dark:bg-gray-700'"
            class="px-6 py-2 rounded-full font-semibold transition">
            Mobile Apps
        </button>

        <button @click="activeFilter = 'design'"
            :class="activeFilter === 'design' ? 'bg-primary-600 text-white' : 'bg-gray-200 dark:bg-gray-700'"
            class="px-6 py-2 rounded-full font-semibold transition">
            UI/UX Design
        </button>
    </div>

    <!-- GRID -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" x-cloak>

        <!-- ITEM WEB -->
        <div class="group relative overflow-hidden rounded-2xl shadow-lg"
            data-aos="zoom-in"
            x-show="activeFilter === 'all' || activeFilter === 'web'"
            x-transition>

            <img src="/img/Portofolio-saya/prediksi-penyakit/prediksi-penyakit.png"
                alt="Project 1"
                class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">

            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-xl font-bold mb-2">Prediksi Penyakit Ginjal</h3>
                    <p class="text-sm mb-4">Membuat Sistem prediksi penyakit ginjal dengan bahasa Python</p>

                    <!-- BUTTON ICON -->
                    <div class="flex gap-2">
                        <button onclick="openProjectModal('project1')"
                            class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded-lg hover:bg-white/30 transition">
                            👁 Lihat
                        </button>

                        <a href="https://github.com/bryanricky" target="_blank"
                            class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded-lg hover:bg-white/30 transition">
                            💻 Kode
                        </a>
                    </div>
                </div>
            </div>

            <div class="absolute top-4 right-4">
                <span class="px-3 py-1 bg-blue-500 text-white text-xs font-semibold rounded-full">
                    Web Apps
                </span>
            </div>
        </div>

        <!-- ITEM WEB -->
        <div class="group relative overflow-hidden rounded-2xl shadow-lg"
            data-aos="zoom-in"
            x-show="activeFilter === 'all' || activeFilter === 'web'"
            x-transition>

           <img src="/img/Portofolio-saya/pos/pos.jpg"
                alt="Project 2"
                class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">

            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-xl font-bold mb-2">Point Of Sale berbasis PWA</h3>
                    <p class="text-sm mb-4">Membuat Sistem Point Of Sale dengan bahasa PHP dan Framework Laravel</p>

                    <!-- BUTTON ICON -->
                    <div class="flex gap-2">
                        <button onclick="openProjectModal('project2')"
                            class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded-lg hover:bg-white/30 transition">
                            👁 Lihat
                        </button>

                        <a href="https://github.com/bryanricky" target="_blank"
                            class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded-lg hover:bg-white/30 transition">
                            💻 Kode
                        </a>
                    </div>
                </div>
            </div>

            <div class="absolute top-4 right-4">
                <span class="px-3 py-1 bg-blue-500 text-white text-xs font-semibold rounded-full">
                    Web Apps
                </span>
            </div>
        </div>

        <!-- ITEM WEB -->
        <div class="group relative overflow-hidden rounded-2xl shadow-lg"
            data-aos="zoom-in"
            x-show="activeFilter === 'all' || activeFilter === 'web'"
            x-transition>

            <img src="/img/Portofolio-saya/sidik-jari/sidik-jari.jpg"
                alt="Project 3"
                class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">

            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-xl font-bold mb-2">Integrasi Fingerprint ke dalam website Warung Tekan (WARTEK)</h3>
                    <p class="text-sm mb-4">Mengintegrasikan sistem fingerprint ke dalam website Warung Tekan (WARTEK) untuk daftar dan cek data pembeli</p>

                    <!-- BUTTON ICON -->
                    <div class="flex gap-2">
                        <button onclick="openProjectModal('project3')"
                            class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded-lg hover:bg-white/30 transition">
                            👁 Lihat
                        </button>

                        <a href="https://github.com/bryanricky" target="_blank"
                            class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded-lg hover:bg-white/30 transition">
                            💻 Kode
                        </a>
                    </div>
                </div>
            </div>

            <div class="absolute top-4 right-4">
                <span class="px-3 py-1 bg-blue-500 text-white text-xs font-semibold rounded-full">
                    Web Apps
                </span>
            </div>
        </div>

        <!-- ITEM MOBILE -->
        <div class="group relative overflow-hidden rounded-2xl shadow-lg"
            data-aos="zoom-in" data-aos-delay="100"
            x-show="activeFilter === 'all' || activeFilter === 'mobile'"
            x-transition>

            <img src="/img/Portofolio-saya/flutter/flutter.png"
                alt="Project 4"
                class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">

            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-xl font-bold mb-2">Aplikasi Mobile Toko Gitar</h3>
                    <p class="text-sm mb-4">Membuat aplikasi mobile menggunakan flutter dan bahasa yang digunakan Dart</p>

                    <!-- BUTTON ICON -->
                    <div class="flex gap-2">
                        <button onclick="openProjectModal('project4')"
                            class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded-lg hover:bg-white/30 transition">
                            👁 Lihat
                        </button>

                        <a href="https://github.com/bryanricky" target="_blank"
                            class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded-lg hover:bg-white/30 transition">
                            💻 Kode
                        </a>
                    </div>
                </div>
            </div>

            <div class="absolute top-4 right-4">
                <span class="px-3 py-1 bg-green-500 text-white text-xs font-semibold rounded-full">
                    Mobile Apps
                </span>
            </div>
        </div>

        <!-- ITEM DESIGN -->
        <div class="group relative overflow-hidden rounded-2xl shadow-lg"
            data-aos="zoom-in" data-aos-delay="200"
            x-show="activeFilter === 'all' || activeFilter === 'design'"
            x-transition>

            <img src="https://images.unsplash.com/photo-1558655146-d09347e92766?w=600&h=400&fit=crop"
                alt="Project 5"
                class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">

            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-xl font-bold mb-2">Dashboard Analytics</h3>
                    <p class="text-sm mb-4">UI Dashboard Business Intelligence</p>

                    <!-- BUTTON ICON -->
                    <div class="flex gap-2">
                        <button onclick="openProjectModal('project3')"
                            class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded-lg hover:bg-white/30 transition">
                            👁 Lihat
                        </button>

                        <a href="https://github.com/bryanricky" target="_blank"
                            class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded-lg hover:bg-white/30 transition">
                            💻 Kode
                        </a>
                    </div>
                </div>
            </div>

            <div class="absolute top-4 right-4">
                <span class="px-3 py-1 bg-purple-500 text-white text-xs font-semibold rounded-full">
                    UI/UX Design
                </span>
            </div>
        </div>
    </div>

    <!-- PROJECT MODAL -->
    <div id="projectModal" 
        class="fixed inset-0 bg-black/60 hidden opacity-0 flex items-center justify-center z-50 transition-opacity p-3 sm:p-6">

        <div id="modalContent" 
            class="bg-white dark:bg-gray-900 w-full max-w-4xl max-h-[90vh] overflow-y-auto 
                    rounded-xl sm:rounded-2xl p-4 sm:p-6 transform scale-95 transition-transform relative">

            <!-- Close -->
            <button onclick="closeProjectModal()" 
                    class="absolute top-3 right-4 text-xl text-gray-500 hover:text-red-500">
                ✖
            </button>

            <!-- Title -->
            <h2 id="modalTitle" class="text-xl sm:text-2xl font-bold mb-4"></h2>

            <!-- Body -->
            <div id="modalBody" class="text-sm sm:text-base"></div>

        </div>
    </div>

    <!-- Lightbox (di luar modal, hanya satu kali) -->
    <div id="lightbox" class="fixed inset-0 bg-black/80 hidden items-center justify-center z-50 cursor-pointer">
        <img id="lightbox-img" src="" class="max-w-full max-h-full rounded-lg shadow-2xl">
    </div>

        <script>
        // Data project
        const projectData = {
            project1: {
                title: "Sistem Prediksi Penyakit Ginjal",
                category: "Aplikasi Web",
                image: "{{ asset('img/projects/prediksi-ginjal/Screenshot-1.png') }}", // ← Pakai asset()
                description: "Sistem Prediksi Penyakit Ginjal dibangun menggunakan Python dan Framework Streamlit. Serta menggunakan metode klasifikasi Decision Tree untuk membantu mendiagnosis penyakit ginjal berdasarkan data medis pasien.",
                features: [
                    "Medical data input form",
                    "Kidney disease prediction using Decision Tree",
                    "Prediction result visualization",
                    "Model accuracy and confusion matrix",
                    "Data export feature",
                    "Interactive dashboard"
                ],
                technologies: ["Python", "Streamlit", "MySQL", "Pandas", "Scikit-learn"],
                github: "https://github.com/bryanricky",
                // demo: "#",
                screenshots: [
                    "{{ asset('img/projects/prediksi-ginjal/Screenshot-2.png') }}", // ← asset(),
                    "{{ asset('img/projects/prediksi-ginjal/Screenshot-3.png') }}", // ← asset(),
                    "{{ asset('img/projects/prediksi-ginjal/Screenshot-4.png') }}" // ← asset(),
                ]
            },
            project2: {
                title: "Aplikasi berbasis PWA Point Of Sale",
                category: "Aplikasi Web",
                image: "{{ asset('img/projects/PointOfSale/Picture-1.png') }}", // ← asset(),
                description: "Aplikasi web Point Of Sale berbasis PWA dengan fitur lengkap seperti manajemen penjualan dan inventory.",
                features: [
                    "Terdapat role Admin dan Kasir",
                    "Terdapat dashboard untuk memantau grafik penjualan",
                    "Terdapat manajemen stok barang",
                    "Terdapat transaksi penjualan dan pembelian",
                    "Terdapat transaksi hutang piutang",
                    "Terdapat cetak struk",
                    "Pembayaran tunai (cash) dan non-tunai dengan Midtrans",
                    "Push Notification untuk mengingatkan stok barang menipis",
                    "Rekap otomatis laporan penjualan"
                ],
                technologies: ["PHP", "JavaScript", "MySQL", "PWA", "Laravel", "Midtrans", "HTML", "CSS"],
                github: "https://github.com/bryanricky",
                // demo: "#",
                screenshots: [
                    "{{ asset('img/projects/PointOfSale/Picture-2.png') }}", // ← asset(),
                    "{{ asset('img/projects/PointOfSale/Picture-3.png') }}", // ← asset(),
                    "{{ asset('img/projects/PointOfSale/Picture-4.png') }}" // ← asset(),
                ]
            },
            project3: {
                title: "Integrasi Fingerprint ke dalam website Warung Tekan (WARTEK)",
                category: "Aplikasi Web",
                image: "{{ asset('img/projects/fingerprint/fingerprint-1.png') }}", // ← asset(),
                description: "Mengintegrasikan alat fingerprint ke dalam website Warung Tekan (WARTEK) untuk daftar dan cek data pembeli atau pelanggan. Dengan fitur ini, membuat lebih mudah dalam melacak pembelian pelanggan",
                features: [
                    "Terdapat tombol daftar pembelian menggunakan sidik jari",
                    "Terdapat tombol cari data pembelian dengan sidik jari",
                    "Terdapat menu untuk mengganti sidik jari yang telah didaftarkan",
                    "Pendaftaran sidik jari sangat mudah dan cepat",
                    "Mencari data pembelian pelanggan dengan cepat"
                ],
                technologies: ["PHP", "JavaScript", "PgSQL", "VisualBasic", "Node.js", "Laravel", "HTML", "CSS"],
                github: "https://github.com/bryanricky",
                // demo: "#",
                screenshots: [
                    "{{ asset('img/projects/fingerprint/fingerprint-2.png') }}", // ← asset(),
                    "{{ asset('img/projects/fingerprint/fingerprint-3.png') }}", // ← asset(),
                    "{{ asset('img/projects/fingerprint/fingerprint-4.png') }}" // ← asset(),
                ]
            },
            project4: {
                title: "Aplikasi Mobile Toko Gitar",
                category: "Aplikasi Mobile",
                image: "{{ asset('video/Flutter.mp4') }}",
                description: "Membuat aplikasi mobile menggunakan flutter dan bahasa yang digunakan Dart",
                features: [
                    "Terdapat role Admin dan User",
                    "Terdapat menu katalog produk gitar",
                    "Terdapat menu transaksi penjualan",
                    "Terdapat checkout atau keranjang belanja",
                    "Terdapat menu CRUD produk gitar",
                ],
                technologies: ["Flutter", "Dart", "MongoDB", "API"],
                github: "https://github.com/bryanricky",
                // demo: "#",
                screenshots: [
                    "https://images.unsplash.com/photo-1558655146-d09347e92766?w=400&h=300&fit=crop",
                    "https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=300&fit=crop",
                    "https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=300&fit=crop"
                ]
            }
        };
        
        
        // Fungsi membuka modal
        function openProjectModal(projectId) {
        const modal = document.getElementById('projectModal');
        const modalContent = document.getElementById('modalContent');
        const modalTitle = document.getElementById('modalTitle');
        const modalBody = document.getElementById('modalBody');

        const project = projectData[projectId];
        if (!project) return;

        modalTitle.textContent = project.title;
        modalTitle.className = "text-2xl font-bold mb-4 text-black dark:text-white";

        // Cek apakah file video atau gambar
        const ext = project.image.split('.').pop().toLowerCase();
        let mediaHTML = '';
        if(ext === 'mp4') {
            mediaHTML = `<video src="${project.image}" class="w-full h-64 object-cover rounded-lg" controls autoplay muted loop></video>`;
        } else {
            mediaHTML = `<img src="${project.image}" alt="${project.title}" class="w-full h-64 object-cover rounded-lg">`;
        }

            modalBody.innerHTML = `
                <!-- Media -->
                <div class="mb-6">
                    ${mediaHTML}
                </div>

                <!-- Category Badge -->
                <div class="mb-4">
                    <span class="px-4 py-2 bg-primary-600 text-white text-sm font-semibold rounded-full">${project.category}</span>
                </div>
                
                <!-- Description -->
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Deskripsi</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">${project.description}</p>
                </div>
                
                <!-- Features -->
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Fitur Utama</h3>
                    <ul class="space-y-2">
                        ${project.features.map(feature => `
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary-600 mr-2 mt-1"></i>
                                <span class="text-gray-600 dark:text-gray-400">${feature}</span>
                            </li>
                        `).join('')}
                    </ul>
                </div>
                
                <!-- Technologies -->
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Teknologi yang Digunakan</h3>
                    <div class="flex flex-wrap gap-2">
                        ${project.technologies.map(tech => `
                            <span class="px-3 py-1 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">${tech}</span>
                        `).join('')}
                    </div>
                </div>
                
                <!-- Screenshots dengan Lightbox -->
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Screenshot</h3>
                    <div class="grid grid-cols-3 gap-4">
                        ${project.screenshots.map((screenshot, index) => `
                            <img src="${screenshot}" 
                                alt="Screenshot ${index + 1}" 
                                class="w-full h-32 object-cover rounded-lg hover:scale-105 transition-transform cursor-pointer shadow-md hover:shadow-xl"
                                onclick="openLightbox('${screenshot}')">
                        `).join('')}
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex gap-4">
                    <a href="${project.demo}" class="flex-1 btn-primary text-center hidden">
                        <i class="fas fa-external-link-alt mr-2"></i>Lihat Demo
                    </a>
                    <a href="${project.github}" target="_blank" class="flex-1 btn-secondary text-center">
                        <i class="fab fa-github mr-2"></i>Lihat Kode
                    </a>
                </div>
            `;

            // Tampilkan modal
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalContent.classList.remove('scale-95');
                modalContent.classList.add('scale-100');
            }, 10);

            // Show modal with animation
            modal.classList.remove('hidden');
                setTimeout(() => {
                    modal.classList.remove('opacity-0');
                    modalContent.classList.remove('scale-95');
                    modalContent.classList.add('scale-100');
                }, 10);
            }

            // Fungsi untuk menutup modal
            function closeProjectModal() {
                const modal = document.getElementById('projectModal');
                const modalContent = document.getElementById('modalContent');
                
                modal.classList.add('opacity-0');
                modalContent.classList.remove('scale-100');
                modalContent.classList.add('scale-95');
                
                setTimeout(() => {
                    modal.classList.add('hidden');
                }, 300);
            }

            // Close modal saat klik di luar
            document.getElementById('projectModal')?.addEventListener('click', function(e) {
                if (e.target === this) {
                    closeProjectModal();
                }
            });

            // Close modal dengan tombol ESC
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeProjectModal();
                }
            });

            // =======================
            // LIGHTBOX (di luar modal)
            // =======================
            function openLightbox(src) {
                const lightbox = document.getElementById('lightbox');
                const lightboxImg = document.getElementById('lightbox-img');
                lightboxImg.src = src;
                lightbox.classList.remove('hidden');
                lightbox.classList.add('flex');
            }

            document.getElementById('lightbox').addEventListener('click', function() {
                this.classList.add('hidden');
                this.classList.remove('flex');
                document.getElementById('lightbox-img').src = '';
            });
        </script>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="section-title">Hubungi Saya</h2>
                <p class="section-subtitle">Siap kolaborasi untuk proyek web berikutnya</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <!-- Contact Info -->
                <div data-aos="fade-right">
                    <h3 class="text-2xl font-bold font-heading text-gray-900 dark:text-white mb-6">
                        Let's Talk About Your Project
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-8 leading-relaxed text-justify">
                       Saya selalu terbuka untuk mendiskusikan proyek baru, ide kreatif, atau peluang untuk menjadi bagian dari visi Anda. 
                       Jangan ragu untuk menghubungi saya!
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-primary-100 dark:bg-primary-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-primary-600 dark:text-primary-400 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Email</h4>
                                <a href="mailto:bryanricky11@gmail.com" class="text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                                    bryanricky11@gmail.com
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-primary-100 dark:bg-primary-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-primary-600 dark:text-primary-400 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Phone</h4>
                                <a href="tel:+6281234567890" class="text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                                    +62 897-3366-336
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-primary-100 dark:bg-primary-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-primary-600 dark:text-primary-400 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Location</h4>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Madiun, Indonesia
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Follow Me</h4>
                        <div class="flex gap-3">
                            <a href="https://github.com/bryanricky?tab=repositories" class="w-10 h-10 bg-gray-200 dark:bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary-600 hover:text-white dark:hover:bg-primary-600 transition-all duration-300">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/bryan-erc-46a287383" class="w-10 h-10 bg-gray-200 dark:bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary-600 hover:text-white dark:hover:bg-primary-600 transition-all duration-300">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://x.com/ErcBryan43096" class="w-10 h-10 bg-gray-200 dark:bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary-600 hover:text-white dark:hover:bg-primary-600 transition-all duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com/bryan_erc/" class="w-10 h-10 bg-gray-200 dark:bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary-600 hover:text-white dark:hover:bg-primary-600 transition-all duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div data-aos="fade-left">
                    <form action="{{ route('contact.send') }}" method="POST" class="card p-8">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">
                                Your Name *
                            </label>
                            <input type="text" id="name" name="name" required
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-300">
                        </div>

                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">
                                Your Email *
                            </label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-300">
                        </div>

                        <div class="mb-6">
                            <label for="subject" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">
                                Subject *
                            </label>
                            <input type="text" id="subject" name="subject" required
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-300">
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">
                                Your Message *
                            </label>
                            <textarea id="message" name="message" rows="5" required
                                      class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-300 resize-none"></textarea>
                        </div>

                        <button type="submit" class="w-full btn-primary">
                            <i class="fas fa-paper-plane mr-2"></i> Send Message
                        </button>

                        <!-- Success Message -->
                        @if(session('success'))
                        <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-lg">
                            <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h3 class="text-2xl font-bold font-heading gradient-text mb-4">Portfolio</h3>
                    <p class="text-gray-400 mb-4">
                        Mengembangkan website yang modern, fungsional, dan responsif dengan perhatian pada detail dan kualitas.
                    </p>
                    <div class="flex gap-3">
                        <a href="https://github.com/bryanricky?tab=repositories" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary-600 transition-colors">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/bryan-erc-46a287383" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary-600 transition-colors">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://x.com/ErcBryan43096" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary-600 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-primary-400 transition-colors">Home</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-primary-400 transition-colors">About</a></li>
                        <li><a href="#skills" class="text-gray-400 hover:text-primary-400 transition-colors">Skills</a></li>
                        <li><a href="#portfolio" class="text-gray-400 hover:text-primary-400 transition-colors">Portfolio</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-primary-400 transition-colors">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-envelope mr-2 text-primary-400"></i> bryanricky11@gmail.com</li>
                        <li><i class="fas fa-phone mr-2 text-primary-400"></i> +62 897-3366-336</li>
                        <li><i class="fas fa-map-marker-alt mr-2 text-primary-400"></i> Madiun, Indonesia</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-400">
                    &copy; 2026 <span class="text-primary-400 font-semibold">Bryan Ricky</span>. All rights reserved.
                </p>
                <p class="text-gray-500 text-sm mt-2">
                    Made with <i class="fas fa-heart text-red-500"></i> using Laravel & Tailwind CSS
                </p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scrollTop" 
            class="fixed bottom-8 right-8 w-12 h-12 bg-primary-600 text-white rounded-full shadow-lg hover:bg-primary-700 transition-all duration-300 transform hover:scale-110 opacity-0 invisible"
            onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
            x-data
            x-init="
                window.addEventListener('scroll', () => {
                    const btn = document.getElementById('scrollTop');
                    if (window.scrollY > 500) {
                        btn.classList.remove('opacity-0', 'invisible');
                    } else {
                        btn.classList.add('opacity-0', 'invisible');
                    }
                });
            ">
        <i class="fas fa-arrow-up"></i>
    </button>

    <style>
        [x-cloak] { display: none !important; }

        .about-img {
            transition: all 0.5s ease;
            animation: float 4s ease-in-out infinite;
        }

        /* efek hover zoom + tilt */
        .about-img:hover {
            transform: scale(1.05) rotate(1deg);
            box-shadow: 0 20px 40px rgba(0,0,0,0.25);
        }

        /* animasi naik turun */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
    </style>
</body>
</html>
