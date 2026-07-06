<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Portofolio Fachriel</title>
    @vite(['resources/css/style.css'])
</head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="nav-logo">Fachriel<span>.Dev</span></a>
            <div class="nav-menu">
                <a href="{{ route('home') }}" class="nav-item">Home</a>
                <a href="{{ route('about') }}" class="nav-item active">About Me</a>
                <a href="{{ route('admin.index') }}" class="nav-item admin-link">Admin Panel</a>
            </div>
        </div>
    </nav>

   <main>
        <div class="container">
            <section class="about-section">
                <div class="about-card">
                    
                    <div class="about-image-wrapper">
                      <img src="{{ Vite::asset('resources/img/foto diri.jpg') }}" alt="Foto Fachriel" class="about-image">
                    </div>

                    <div class="about-content">
                        <div class="about-header">
                            <h2>About Me</h2>
                            <span class="sub-title">Sistem Informasi Student & Developer</span>
                        </div>
                        
                        <p>
                            Halo! Saya seorang mahasiswa jurusan <strong>Sistem Informasi</strong> yang berfokus pada pengembangan perangkat lunak dan aplikasi mobile. Saya senang mengeksplorasi teknologi baru, menyusun arsitektur kode yang bersih, serta membangun proyek-proyek inovatif yang dapat menyelesaikan masalah di dunia nyata.
                        </p>
                        
                        <div class="about-details">
                            <div class="detail-item">
                                <strong>Fokus Utama</strong>
                                <span>Mobile Development (Android Studio) & Web Development</span>
                            </div>
                            <div class="detail-item">
                                <strong>Lokasi</strong>
                                <span>Surabaya, Indonesia</span>
                            </div>
                        </div>

                        <div class="skills-compact">
                            <strong class="skills-compact-title">Keahlian Utama</strong>
                            
                            <div class="skills-horizontal-grid">
                                <div class="skill-item">
                                    <span class="skill-name">Hard Skills</span>
                                    <span class="skill-desc">Native Android (Kotlin), Laravel, Web Dev.</span>
                                </div>
                                
                                <div class="skill-item">
                                    <span class="skill-name">Soft Skills</span>
                                    <span class="skill-desc">Problem Solving, Berpikir Analitis, Kerjasama Tim.</span>
                                </div>
                                
                                <div class="skill-item">
                                    <span class="skill-name">Tools & VC</span>
                                    <span class="skill-desc">Android Studio, Firebase, Git, Figma, Postman.</span>
                                </div>
                                
                                <div class="skill-item">
                                    <span class="skill-name">Bahasa</span>
                                    <span class="skill-desc">Indonesia (Native), Inggris (Dasar).</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </main>

</body>
</html>