<?php include 'header.php'; ?>

<!-- Style untuk Landing Page -->
<style>
    /* ===== VARIABLES ===== */
    :root {
        --primary-blue: #2D9CDB;
        --secondary-yellow: #FFC107;
        --dark-text: #333333;
        --light-gray: #f8f9fa;
        --white: #ffffff;
        --gradient-blue: linear-gradient(135deg, #2D9CDB 0%, #1a7bb8 100%);
        --gradient-yellow: linear-gradient(135deg, #FFC107 0%, #FF9800 100%);
        --shadow-light: 0 5px 15px rgba(0, 0, 0, 0.05);
        --shadow-medium: 0 10px 30px rgba(0, 0, 0, 0.1);
        --transition: all 0.3s ease;
    }
    
    /* ===== HERO SECTION ===== */
    .siega-hero {
        background: var(--gradient-blue);
        color: var(--white);
        padding: 100px 0 80px;
        text-align: center;
        margin-top: 0;
        position: relative;
        overflow: hidden;
    }
    
    .siega-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        opacity: 0.1;
        z-index: 0;
    }
    
    .hero-content {
        position: relative;
        z-index: 1;
        max-width: 800px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }
    
    .hero-subtitle {
        font-size: 1.3rem;
        opacity: 0.95;
        margin-bottom: 30px;
        line-height: 1.6;
    }
    
    .hero-btn {
        display: inline-block;
        background: var(--secondary-yellow);
        color: var(--dark-text);
        padding: 14px 35px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 1.1rem;
        text-decoration: none;
        transition: var(--transition);
        box-shadow: 0 5px 20px rgba(255, 193, 7, 0.3);
        border: none;
        cursor: pointer;
    }
    
    .hero-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(255, 193, 7, 0.4);
        background: #FFB300;
        color: var(--dark-text);
    }
    
    /* ===== AKREDITASI SECTION ===== */
    .akreditasi-section {
        padding: 80px 0;
        background: var(--light-gray);
    }
    
    .section-header {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .section-title {
        font-size: 2.5rem;
        color: var(--primary-blue);
        margin-bottom: 15px;
        font-weight: 700;
        position: relative;
        display: inline-block;
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: var(--secondary-yellow);
        border-radius: 2px;
    }
    
    .section-description {
        font-size: 1.1rem;
        color: #666;
        max-width: 700px;
        margin: 0 auto;
    }
    
    .akreditasi-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        max-width: 1000px;
        margin: 0 auto;
    }
    
    .akreditasi-card {
        background: var(--white);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--shadow-light);
        transition: var(--transition);
        text-align: center;
        padding: 30px 20px;
    }
    
    .akreditasi-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-medium);
    }
    
    .akreditasi-img {
        width: 100%;
        max-width: 300px;
        height: auto;
        border-radius: 8px;
        margin-bottom: 20px;
        border: 3px solid var(--light-gray);
    }
    
    .akreditasi-title {
        font-size: 1.5rem;
        color: var(--primary-blue);
        margin-bottom: 10px;
        font-weight: 600;
    }
    
    .akreditasi-desc {
        color: #666;
        font-size: 1rem;
        line-height: 1.6;
    }
    
    /* ===== QUICK LINKS SECTION ===== */
    .quicklinks-section {
        padding: 80px 0;
        background: var(--white);
    }
    
    .quicklinks-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .quicklink-card {
        background: var(--white);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--shadow-light);
        transition: var(--transition);
        position: relative;
        height: 300px;
        cursor: pointer;
    }
    
    .quicklink-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-medium);
    }
    
    .quicklink-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        filter: brightness(0.7);
        transition: var(--transition);
    }
    
    .quicklink-card:hover .quicklink-bg {
        filter: brightness(0.5);
        transform: scale(1.05);
    }
    
    .quicklink-content {
        position: relative;
        z-index: 2;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 30px;
        color: var(--white);
        text-align: center;
    }
    
    .quicklink-icon {
        font-size: 3rem;
        margin-bottom: 20px;
        opacity: 0.9;
    }
    
    .quicklink-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 10px;
        text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }
    
    .quicklink-desc {
        font-size: 0.95rem;
        opacity: 0.9;
        text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
    }
    
    /* ===== TESTIMONIAL SECTION ===== */
    .testimonial-section {
        padding: 80px 0;
        background: var(--light-gray);
    }
    
    .testimonial-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .testimonial-card {
        background: var(--white);
        border-radius: 12px;
        padding: 30px;
        box-shadow: var(--shadow-light);
        transition: var(--transition);
        position: relative;
    }
    
    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }
    
    .testimonial-quote {
        font-size: 2.5rem;
        color: var(--primary-blue);
        opacity: 0.3;
        position: absolute;
        top: 15px;
        left: 20px;
    }
    
    .testimonial-text {
        font-size: 1rem;
        color: #555;
        line-height: 1.7;
        margin-bottom: 25px;
        font-style: italic;
    }
    
    .testimonial-author {
        display: flex;
        align-items: center;
    }
    
    .author-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--primary-blue);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--white);
        font-weight: 600;
        font-size: 1.2rem;
        margin-right: 15px;
    }
    
    .author-info h4 {
        color: var(--primary-blue);
        margin-bottom: 5px;
        font-weight: 600;
    }
    
    .author-info p {
        color: #777;
        font-size: 0.9rem;
    }
    
    /* ===== STATISTICS SECTION ===== */
    .stats-section {
        padding: 60px 0;
        background: var(--gradient-blue);
        color: var(--white);
    }
    
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        max-width: 1000px;
        margin: 0 auto;
        text-align: center;
    }
    
    .stat-item h3 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 10px;
    }
    
    .stat-item p {
        font-size: 1.1rem;
        opacity: 0.9;
    }
    
    /* ===== CTA SECTION ===== */
    .cta-section {
        padding: 80px 0;
        background: var(--white);
        text-align: center;
    }
    
    .cta-content {
        max-width: 700px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .cta-title {
        font-size: 2.2rem;
        color: var(--primary-blue);
        margin-bottom: 20px;
        font-weight: 700;
    }
    
    .cta-text {
        font-size: 1.1rem;
        color: #666;
        margin-bottom: 30px;
        line-height: 1.6;
    }
    
    .cta-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .btn-primary {
        background: var(--primary-blue);
        color: var(--white);
        padding: 12px 30px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: var(--transition);
        box-shadow: 0 5px 15px rgba(45, 156, 219, 0.3);
    }
    
    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(45, 156, 219, 0.4);
        color: var(--white);
        background: #1a7bb8;
    }
    
    .btn-secondary {
        background: transparent;
        color: var(--primary-blue);
        padding: 12px 30px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: var(--transition);
        border: 2px solid var(--primary-blue);
    }
    
    .btn-secondary:hover {
        background: rgba(45, 156, 219, 0.1);
        transform: translateY(-3px);
        color: var(--primary-blue);
    }
    
    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .hero-subtitle {
            font-size: 1.1rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .quicklinks-grid {
            grid-template-columns: 1fr;
        }
        
        .cta-buttons {
            flex-direction: column;
            align-items: center;
        }
        
        .btn-primary, .btn-secondary {
            width: 100%;
            max-width: 300px;
            text-align: center;
        }
    }
</style>

<!-- HERO SECTION -->
<section class="siega-hero">
    <div class="hero-content">
        <h1 class="hero-title">Selamat Datang di SIEGA</h1>
        <p class="hero-subtitle">
            Program Studi Sistem Informasi & E-Commerce Universitas Katolik Soegijapranata.<br>
            Mencetak profesional IT yang kompeten, kreatif, dan berkarakter.
        </p>
        <a href="#akreditasi" class="hero-btn">Jelajahi SIEGA</a>
    </div>
</section>

<!-- AKREDITASI SECTION -->
<section class="akreditasi-section" id="akreditasi">
    <div class="section-header">
        <h2 class="section-title">Akreditasi Unggul</h2>
        <p class="section-description">
            SIEGA telah mendapatkan pengakuan nasional dengan akreditasi terbaik, 
            menjamin kualitas pendidikan yang sesuai dengan standar nasional.
        </p>
    </div>
    
    <div class="akreditasi-grid">
        <div class="akreditasi-card">
            <img src="akreb.jpg" alt="Akreditasi A" class="akreditasi-img">
            <h3 class="akreditasi-title">Akreditasi A - BAN PT</h3>
            <p class="akreditasi-desc">
                SIEGA Unika Soegijapranata memperoleh akreditasi Baik Sekali  berdasarkan Keputusan BAN-PT No. 10974/SK/BAN-PT/Ak.ISK/S/IX/2021 pada 21 September 2021
            </p>
        </div>
        
        <div class="akreditasi-card">
            <img src="akrea.jpg" alt="Akreditasi Unggul" class="akreditasi-img">
            <h3 class="akreditasi-title">Akreditasi Unggul</h3>
            <p class="akreditasi-desc">
                Universitas Katolik Soegijapranata memperoleh peringkat Akreditasi Unggul berdasarkan SK Direktur Dewan Eksekutif BAN PT pada 11 April 2023
            </p>
        </div>
    </div>
</section>

<!-- STATISTICS SECTION -->
<section class="stats-section">
    <div class="stats-grid">
        <div class="stat-item">
            <h3>500+</h3>
            <p>Mahasiswa Aktif</p>
        </div>
        <div class="stat-item">
            <h3>85%</h3>
            <p>Tingkat Penyerapan Kerja</p>
        </div>
        <div class="stat-item">
            <h3>50+</h3>
            <p>Mitra Industri</p>
        </div>
        <div class="stat-item">
            <h3>100+</h3>
            <p>Proyek Terselesaikan</p>
        </div>
    </div>
</section>

<!-- QUICK LINKS SECTION -->
<section class="quicklinks-section">
    <div class="section-header">
        <h2 class="section-title">Informasi SIEGA</h2>
        <p class="section-description">
            Jelajahi berbagai informasi dan layanan yang tersedia di Program Studi SIEGA.
        </p>
    </div>
    
    <div class="quicklinks-grid">
        <!-- Tentang Kami -->
        <a href="tentang_kami.php" class="quicklink-card">
            <div class="quicklink-bg" style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');"></div>
            <div class="quicklink-content">
                <div class="quicklink-icon">👥</div>
                <h3 class="quicklink-title">Tentang Kami</h3>
                <p class="quicklink-desc">Kenali lebih dekat sejarah, visi, dan misi SIEGA</p>
            </div>
        </a>
        
        <!-- Akademik -->
        <a href="akademik.php" class="quicklink-card">
            <div class="quicklink-bg" style="background-image: url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');"></div>
            <div class="quicklink-content">
                <div class="quicklink-icon">📚</div>
                <h3 class="quicklink-title">Akademik</h3>
                <p class="quicklink-desc">Kurikulum, dosen, dan fasilitas pembelajaran</p>
            </div>
        </a>
        
        <!-- Karya -->
        <a href="akademik.php" class="quicklink-card">
            <div class="quicklink-bg" style="background-image: url('https://images.unsplash.com/photo-1551650975-87deedd944c3');"></div>
            <div class="quicklink-content">
                <div class="quicklink-icon">💡</div>
                <h3 class="quicklink-title">Karya Mahasiswa</h3>
                <p class="quicklink-desc">Portofolio dan inovasi hasil karya mahasiswa</p>
            </div>
        </a>
        
        <!-- Berita -->
        <a href="berita.php" class="quicklink-card">
            <div class="quicklink-bg" style="background-image: url('https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');"></div>
            <div class="quicklink-content">
                <div class="quicklink-icon">📰</div>
                <h3 class="quicklink-title">Berita & Acara</h3>
                <p class="quicklink-desc">Update kegiatan dan perkembangan terbaru</p>
            </div>
        </a>
        
        <!-- Daftar -->
        <a href="info_pendaftaran.php" class="quicklink-card">
            <div class="quicklink-bg" style="background-image: url('https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');"></div>
            <div class="quicklink-content">
                <div class="quicklink-icon">🎓</div>
                <h3 class="quicklink-title">Daftar Sekarang</h3>
                <p class="quicklink-desc">Bergabung menjadi bagian dari keluarga SIEGA</p>
            </div>
        </a>
    </div>
</section>

<!-- TESTIMONIAL SECTION -->
<section class="testimonial-section">
    <div class="section-header">
        <h2 class="section-title">Kata Alumni SIEGA</h2>
        <p class="section-description">
            Pengalaman langsung dari mereka yang telah sukses berkarier setelah lulus dari SIEGA.
        </p>
    </div>
    
    <div class="testimonial-grid">
        <!-- Testimoni 1 -->
        <div class="testimonial-card">
            <div class="testimonial-quote">"</div>
            <p class="testimonial-text">
                Kuliah di SIEGA memberikan saya fondasi yang kuat dalam pengembangan sistem informasi. 
                Kurikulum yang update dengan kebutuhan industri membuat saya siap bekerja 
                bahkan sebelum wisuda.
            </p>
            <div class="testimonial-author">
                <div class="author-avatar">EM</div>
                <div class="author-info">
                    <h4>Elvens Micquel</h4>
                    <p>System Analyst, Google Indonesia</p>
                </div>
            </div>
        </div>
        
        <!-- Testimoni 2 -->
        <div class="testimonial-card">
            <div class="testimonial-quote">"</div>
            <p class="testimonial-text">
                Program E-Commerce di SIEGA mengajarkan saya tidak hanya teori, tapi juga 
                praktik langsung dalam membangun bisnis digital. Kini saya memiliki startup 
                e-commerce yang sukses di pasar nasional.
            </p>
            <div class="testimonial-author">
                <div class="author-avatar">EV</div>
                <div class="author-info">
                    <h4>Evelyn Vania</h4>
                    <p>Founder, Vania Fashion Store</p>
                </div>
            </div>
        </div>
        
        <!-- Testimoni 3 -->
        <div class="testimonial-card">
            <div class="testimonial-quote">"</div>
            <p class="testimonial-text">
                Dosen-dosen di SIEGA sangat berpengalaman dan selalu mendukung mahasiswa. 
                Projek akhir saya tentang sistem informasi manajemen rumah sakit bahkan 
                diadopsi oleh rumah sakit di Semarang.
            </p>
            <div class="testimonial-author">
                <div class="author-avatar">MP</div>
                <div class="author-info">
                    <h4>Maxine Phoa</h4>
                    <p>IT Consultant, Deloitte Indonesia</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="cta-content">
        <h2 class="cta-title">Siap Bergabung dengan SIEGA?</h2>
        <p class="cta-text">
            Jadilah bagian dari generasi digital yang siap menghadapi tantangan masa depan. 
            Program studi SIEGA membekali Anda dengan keterampilan teknologi terbaru, 
            jaringan industri yang luas, dan pengalaman belajar yang mendalam.
        </p>
        <div class="cta-buttons">
            <a href="info_pendaftaran.php" class="btn-primary">Daftar Sekarang</a>
            <a href="tentang_kami.php" class="btn-secondary">Pelajari Lebih Lanjut</a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>