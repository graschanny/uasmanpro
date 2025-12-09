<?php include 'header.php'; ?>

<style>
    /* Menggunakan Font Poppins sesuai style.css utama */
    .siega-section {
        padding: 40px 0;
    }

    /* Judul dengan Aksen Kuning Kelompok */
    .siega-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 10px;
        position: relative;
        display: inline-block;
    }
    .siega-title::after {
        content: '';
        display: block;
        width: 60%;
        height: 5px;
        background-color: #FFC107; /* Warna Accent Style.css */
        margin-top: 8px;
        border-radius: 5px;
    }

    /* Box Putih Universal (Sejarah, Visi Misi, Akreditasi) */
    .content-box {
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        margin-bottom: 40px;
        border: 1px solid #eee;
    }

    /* Layout Split (Kiri Teks, Kanan Gambar) */
    .split-container {
        display: flex;
        gap: 40px;
        align-items: center;
        flex-wrap: wrap;
    }
    .split-text {
        flex: 1;
        font-size: 1rem;
        color: #555;
    }
    .split-image {
        flex: 1;
        min-width: 300px;
        text-align: center;
    }
    .split-image img {
        width: 100%;
        max-width: 450px;
        border-radius: 10px;
    }
    
    /* Khusus Gambar Sertifikat */
    .sertif-img {
        border: 10px solid #f8f9fa; /* Frame foto */
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    /* Visi Misi Grid */
    .visi-misi-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }
    @media (max-width: 768px) {
        .visi-misi-grid { grid-template-columns: 1fr; }
    }
    
    .misi-list {
        list-style: none;
        padding: 0;
    }
    .misi-list li {
        margin-bottom: 12px;
        padding-left: 25px;
        position: relative;
    }
    .misi-list li::before {
        content: '✔'; /* Bullet point centang */
        color: #2D9CDB;
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    /* Dosen Grid */
    .expert-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 30px;
    }
    .expert-card {
        background: #fff;
        border-radius: 15px;
        padding: 30px 20px;
        text-align: center;
        border: 1px solid #eee;
        transition: 0.3s;
        position: relative;
        overflow: hidden;
    }
    .expert-card:hover {
        transform: translateY(-10px);
        border-color: #2D9CDB;
        box-shadow: 0 10px 25px rgba(45, 156, 219, 0.15);
    }
    .expert-img {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        object-fit: cover;
        object-position: top;
        margin-bottom: 15px;
        border: 3px solid #FFC107;
    }
    .expert-name {
        font-size: 1.1rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 5px;
        line-height: 1.4;
    }
    .expert-role {
        color: #2D9CDB;
        font-weight: 600;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Fasilitas Grid (Updated) */
    .facility-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin-top: 20px;
    }
    .facility-item {
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 15px;
        border-bottom: 4px solid #eee;
        transition: 0.3s;
        box-shadow: 0 5px 15px rgba(0,0,0,0.03);
    }
    .facility-item:hover {
        border-bottom: 4px solid #FFC107; /* Aksen Kuning saat hover */
        transform: translateY(-5px);
    }
    .facility-icon {
        font-size: 2.5rem;
        color: #fff;
        background: linear-gradient(135deg, #2D9CDB 0%, #1a7bb9 100%); /* Lingkaran Biru */
        width: 70px;
        height: 70px;
        line-height: 70px;
        border-radius: 50%;
        box-shadow: 0 5px 15px rgba(45, 156, 219, 0.3);
    }
</style>

<div class="container siega-section">
    <div style="text-align: center; margin-bottom: 50px;">
        <h2 class="siega-title">Tentang Kami</h2>
        <p style="color: #666; margin-top: 15px;">Mengenal Visi, Misi, Akreditasi, dan Orang-orang Hebat di Siega.</p>
    </div>

    <div id="sejarah" class="content-box">
        <div class="split-container">
            <div class="split-text">
                <h3 style="margin-bottom: 15px; color: #2D9CDB; font-weight:700;">Sejarah Singkat</h3>
                <p><strong>Didirikan pada 11 November 2011</strong> oleh Prof. Dr. Ridwan Sanjaya S.E., S.Kom., MS.IEC. Program studi ini mendapatkan ijin penyelenggaraan pada tahun 2013. Sejak tahun 2021, kami dikenal dengan julukan <strong>SIEGA</strong> yang merupakan singkatan dari konsentrasi yang ada di dalamnya: Sistem Informasi, E-Commerce, Game Technology, dan Akuntansi SI.</p>
            </div>
            <div class="split-image">
                <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=1000&auto=format&fit=crop" alt="Gedung Kampus" style="box-shadow: 10px 10px 0 #FFC107;">
            </div>
        </div>
    </div>

    <div id="visi-misi" class="content-box" style="border-top: 4px solid #2D9CDB;">
        <div class="visi-misi-grid">
            <div>
                <h3 style="margin-bottom: 15px; font-weight: 700;">Visi</h3>
                <p style="font-style: italic; font-size: 1.1rem; color: #555;">
                    "Menjadi komunitas akademik yang unggul dalam pendidikan, penelitian dan pengabdian dengan dilandasi nilai-nilai Kristiani: cinta kasih, keadilan dan kejujuran."
                </p>
            </div>
            <div style="border-left: 1px solid #eee; padding-left: 30px;">
                <h3 style="margin-bottom: 15px; font-weight: 700;">Misi</h3>
                <ul class="misi-list">
                    <li>Menyelenggarakan pendidikan yang berkualitas secara akademik dengan didukung pengembangan kepribadian yang utuh.</li>
                    <li>Melakukan penelitian untuk pengembangan ilmu dan teknologi demi meningkatkan kesejahteraan manusia.</li>
                    <li>Melakukan pengabdian kepada masyarakat sebagai penerapan ilmu dan teknologi.</li>
                    <li>Memberikan perhatian dan mencari pemecahan terhadap berbagai masalah sosial budaya masyarakat.</li>
                    <li>Mengembangkan jaringan kerjasama dengan berbagai institusi pendidikan, penelitian dan pengabdian lokal, nasional dan internasional.</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="akreditasi" class="content-box">
        <div class="split-container" style="flex-direction: row-reverse;"> <div class="split-text">
                <h3 style="margin-bottom: 15px; color: #2D9CDB; font-weight:700;">Terakreditasi "Baik Sekali"</h3>
                <p>Berdasarkan Keputusan Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) No. 10974/SK/BAN-PT/Ak.ISK/S/IX/2021.</p>
                <br>
                <p>Pencapaian ini membuktikan komitmen SIEGA Unika Soegijapranata dalam menjaga kualitas pendidikan, kurikulum, dan fasilitas demi masa depan mahasiswa.</p>
                <br>
                <span style="background: #FFC107; padding: 5px 15px; border-radius: 5px; font-weight: bold; font-size: 0.9rem;">Berlaku hingga: 2026</span>
            </div>
            <div class="split-image">
                <img src="sertif.png" alt="Sertifikat Akreditasi" class="sertif-img">
            </div>
        </div>
    </div>

    <div id="dosen" style="margin-bottom: 60px;">
        <h3 style="margin-bottom: 30px; font-weight: 700; border-left: 5px solid #FFC107; padding-left: 15px;">Struktur & Pengajar</h3>
        
        <div class="expert-grid">
            <div class="expert-card">
                <img src="dosen1.jpg" alt="Prof. Ridwan" class="expert-img"> 
                <h4 class="expert-name">Prof. Dr. Ridwan Sanjaya S.E., S.Kom., MS.IEC.</h4>
                <p class="expert-role">Dekan Fakultas Ilmu Komputer</p>
            </div>
            <div class="expert-card">
                <img src="dosen2.jpg" alt="Dr. Bernadinus" class="expert-img"> 
                <h4 class="expert-name">Dr. Bernadinus Harnadi S.T., M.T.</h4>
                <p class="expert-role">Wakil Dekan Fakultas Ilmu Komputer</p>
            </div>
            <div class="expert-card">
                <img src="dosen3.jpg" alt="Dr. Albertus" class="expert-img"> 
                <h4 class="expert-name">Dr. Albertus Dwiyoga Widiantoro S.Kom., M.Kom.</h4>
                <p class="expert-role">Ketua Program Studi</p>
            </div>
            <div class="expert-card">
                <img src="dosen4.jpg" alt="Andre Kurniawan" class="expert-img"> 
                <h4 class="expert-name">Andre Kurniawan Pamudji S.Kom., M.Ling.</h4>
                <p class="expert-role">Sekretaris Program Studi</p>
            </div>
            <div class="expert-card">
                <img src="dosen5.jpg" alt="Stephani Inggrit" class="expert-img"> 
                <h4 class="expert-name">Stephani Inggrit Swastini, S.Kom, MBA</h4>
                <p class="expert-role">Ka. Lab Sistem Informasi</p>
            </div>
            <div class="expert-card">
                <img src="dosen6.jpg" alt="Agus Cahyo" class="expert-img"> 
                <h4 class="expert-name">Agus Cahyo Nugroho S.Kom., M.T.</h4>
                <p class="expert-role">Dosen Sistem Informasi</p>
            </div>
            <div class="expert-card">
                <img src="dosen7.jpg" alt="Erdhi Widyarto" class="expert-img"> 
                <h4 class="expert-name">Erdhi Widyarto Nugroho S.T., M.T.</h4>
                <p class="expert-role">Dosen Sistem Informasi</p>
            </div>
            <div class="expert-card">
                <img src="dosen8.jpg" alt="Dr. Brenda" class="expert-img"> 
                <h4 class="expert-name">Dr. T. Brenda Ch S.T., M.T.</h4>
                <p class="expert-role">Dosen Sistem Informasi</p>
            </div>
            <div class="expert-card">
                <img src="dosen9.jpg" alt="Fx. Hendra" class="expert-img"> 
                <h4 class="expert-name">Fx. Hendra Prasetya S.T., M.T.</h4>
                <p class="expert-role">Dosen Sistem Informasi</p>
            </div>
        </div>
    </div>

    <div id="fasilitas">
        <h3 style="margin-bottom: 30px; font-weight: 700; border-left: 5px solid #FFC107; padding-left: 15px;">Fasilitas FIKOM</h3>
        <p style="color: #666; margin-bottom: 20px;">Lingkungan belajar yang kondusif untuk mendukung kreativitas mahasiswa.</p>
        
        <div class="facility-grid">
            <div class="facility-item">
                <div class="facility-icon">🤝</div>
                <h4 style="margin:0;">Selasar Belajar</h4>
                <p style="font-size: 0.9rem; color:#666;">Tempat belajar bersama yang nyaman dan terbuka untuk diskusi kelompok.</p>
            </div>

            <div class="facility-item">
                <div class="facility-icon">🖥️</div>
                <h4 style="margin:0;">Lab Komputer High-End</h4>
                <p style="font-size: 0.9rem; color:#666;">Dilengkapi iMac & PC spesifikasi tinggi untuk Coding, Rendering, dan Gaming.</p>
            </div>

            <div class="facility-item">
                <div class="facility-icon">📖</div>
                <h4 style="margin:0;">Perpustakaan Digital</h4>
                <p style="font-size: 0.9rem; color:#666;">Akses ribuan jurnal, e-book, dan referensi akademik secara online 24 jam.</p>
            </div>

            <div class="facility-item">
                <div class="facility-icon">🚀</div>
                <h4 style="margin:0;">WiFi Super Cepat</h4>
                <p style="font-size: 0.9rem; color:#666;">Koneksi internet stabil dan cepat di seluruh area gedung fakultas.</p>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>