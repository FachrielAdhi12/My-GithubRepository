<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Portofolio Fachriel</title>
    @vite(['resources/css/home.css', 'resources/css/about.css'])
</head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="nav-logo">Fachriel<span>.Dev</span></a>
            <div class="nav-menu">
                <a href="{{ route('home') }}" class="nav-item">Home</a>
                <a href="{{ route('about') }}" class="nav-item active">About Me</a>
            </div>
        </div>
    </nav>

   <main class="container">
    <section class="about-section">
        <div class="about-card">
            
            <div class="about-image-wrapper">
                <img src="{{ Vite::asset('resources/img/foto diri.jpg') }}" class="about-image" alt="Foto Fachriel">
            </div>
            
            <div class="about-content">
                <div class="about-header">
                    <h2>About Me</h2>
                    <span class="sub-title">Sistem Informasi Student & Developer</span>
                </div>
                
                <p>Halo! Saya seorang Mahasiswa Sistem Informasi UPN 'Veteran' Jawa Timur dengan IPK 3,52 yang berdomisili di Sidoarjo. 
                    Memiliki minat besar dan dasar teknis dalam pengembangan aplikasi mobile dan website. Pribadi yang cepat belajar, proaktif, 
                    dan antusias untuk berkontribusi dalam tim dalam merancang serta membangun solusi digital yang solutif. 
                    Siap mengimplementasikan pengetahuan teknis yang diperoleh di bangku kuliah untuk mendukung efisiensi pengembangan proyek perusahaan.</p>
                
                <div class="about-details">
                    <div class="detail-item">
                        <strong>Fokus Utama</strong>
                        Mobile Development (Android Studio) & Web Development
                    </div>
                    <div class="detail-item">
                        <strong>Lokasi</strong>
                        Surabaya, Indonesia
                    </div>
                </div>
                
                <div class="skills-compact">
                    <span class="skills-compact-title">Keahlian Utama</span>
                    <div class="skills-horizontal-grid">
                        <div class="skill-item">
                            <span class="skill-name">Hard Skills</span>
                            <span class="skill-desc">Native Android Development (Jetpack Compose), Backend Web Development, Database Management, UI/UX Design.</span>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Soft Skills</span>
                            <span class="skill-desc">Problem Solving, Berpikir Analitis, Kerjasama Tim, Konseptualisasi Produk.</span>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Tools</span>
                            <span class="skill-desc">Android Studio, Firebase Console, Figma, Git & GitHub, Visual Studio Code, Xampp, Postman (untuk tes API).</span>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Bahasa Pemograman</span>
                            <span class="skill-desc">Kotlin, PHP, JavaScript, SQL, HTML & CSS.</span>
                        </div>
                        </div>
                </div>

            </div>
        </div>
    </section>
</main>

</body>
</html>