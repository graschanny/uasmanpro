<?php include 'header.php'; ?>

<style>
    .pendaftaran-section {
        padding: 40px 0;
    }

    /* Styles untuk Judul */
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
        background-color: #FFC107; /* Aksen Kuning */
        margin-top: 8px;
        border-radius: 5px;
    }

    /* Kotak Putih untuk Konten */
    .content-box {
        background: #fff;
        padding: 35px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        margin-bottom: 40px;
        border: 1px solid #eee;
    }

    /* Tabel Biaya Modern */
    .biaya-wrapper {
        overflow-x: auto;
        border-radius: 10px;
        border: 1px solid #eee;
    }
    .modern-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 600px;
    }
    .modern-table thead {
        background-color: #2D9CDB; /* Biru Primary */
        color: #fff;
    }
    .modern-table th, .modern-table td {
        padding: 18px 20px;
        text-align: center;
        border-bottom: 1px solid #eee;
    }
    .modern-table td:first-child {
        text-align: left;
        font-weight: 600;
        color: #333;
    }
    /* Harga Highlight */
    .highlight-price {
        color: #2D9CDB;
        font-weight: 700;
        font-size: 1.1rem;
        background-color: #f0f9ff;
    }

    /* List Komponen Biaya */
    .component-list {
        list-style: none;
        padding: 0;
        margin-top: 15px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }
    .component-list li {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        border-left: 4px solid #FFC107;
        font-size: 0.95rem;
    }

    /* Peta Google Maps Responsif */
    .map-container {
        position: relative;
        padding-bottom: 45%; /* Rasio tinggi peta */
        height: 0;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        border: 1px solid #ddd;
    }
    .map-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
    @media (max-width: 768px) {
        .map-container { padding-bottom: 75%; }
        .component-list { grid-template-columns: 1fr; }
    }

    /* Kontak Info Grid */
    .contact-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 20px;
    }
    .contact-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }
    .contact-icon {
        background: #eef9ff;
        color: #2D9CDB;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 1.5rem;
        flex-shrink: 0;
    }
</style>

<div class="container pendaftaran-section">
    <div style="text-align: center; margin-bottom: 50px;">
        <h2 class="siega-title">Info & Pendaftaran</h2>
        <p style="color: #666; margin-top: 15px;">Informasi lengkap mengenai biaya studi, lokasi kampus, dan kontak admisi.</p>
    </div>

    <div id="biaya" class="content-box">
        <div style="display:flex; justify-content:space-between; flex-wrap:wrap; align-items:center; margin-bottom:20px;">
            <h3 style="color: #2D9CDB; font-weight:700; margin:0;">Biaya Studi (BKS)</h3>
            <span style="background:#FFC107; padding:5px 15px; border-radius:20px; font-size:0.85rem; font-weight:bold;">Tahun Ajaran 2026/2027</span>
        </div>
        
        <p style="margin-bottom: 20px; color:#555;">
            <strong>BKS (Biaya Kuliah Semester)</strong> adalah sistem pembayaran paket per semester yang sudah mencakup: 
            Uang Gedung, SPP (SKS), Biaya Inisiasi, Kemahasiswaan, KKN, hingga Wisuda Universitas.
        </p>

        <div class="biaya-wrapper">
            <table class="modern-table">
                <thead>
                    <tr>
                        <th width="30%">Program Studi</th>
                        <th width="20%">Peringkat 1 / Prestasi</th>
                        <th width="50%">Rentang Peringkat Lainnya</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            Sistem Informasi<br>
                            <small style="color:#777">Focus: Enterprise & System Analysis</small>
                        </td>
                        <td class="highlight-price">Rp 11.900.000</td>
                        <td rowspan="3" style="vertical-align: middle; background:#fff;">Rp 13.500.000 - Rp 18.000.000</td>
                    </tr>
                    <tr>
                        <td>
                            Game Technology<br>
                            <small style="color:#777">Focus: Game Dev & Animation</small>
                        </td>
                        <td class="highlight-price">Rp 11.900.000</td>
                    </tr>
                    <tr>
                        <td>
                            E-Commerce<br>
                            <small style="color:#777">Focus: Digital Business & Startup</small>
                        </td>
                        <td class="highlight-price">Rp 11.900.000</td>
                    </tr>
                    
                    <tr>
                        <td>
                            Intelligent Accounting (AKSI)<br>
                            <small style="color:#777">Dual Degree (S1 Akun + S1 SI)</small>
                        </td>
                        <td class="highlight-price">Rp 16.900.000</td>
                        <td>Rp 18.500.000 - Rp 23.000.000</td>
                    </tr>
                    <tr>
                        <td>IUP - Big Data Analytics & AI</td>
                        <td class="highlight-price">Rp 17.200.000</td>
                        <td>Rp 19.000.000 - Rp 23.000.000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="margin-top: 30px;">
            <h4 style="margin-bottom: 10px; font-weight:600;">Ketentuan & Skema Pembayaran:</h4>
            <ul class="component-list">
                <li>
                    <strong>✅ Paket All-in-One</strong><br>
                    Tidak ada pungutan biaya SKS atau Uang Gedung terpisah lagi.
                </li>
                <li>
                    <strong>💳 Skema 50:50</strong><br>
                    50% dibayarkan saat diterima, 50% sisanya dibayarkan di tengah semester.
                </li>
                <li>
                    <strong>🎓 Biaya Inisiasi (Sekali Saja)</strong><br>
                    Untuk Jas Almamater, PTMB (Orientasi), & Rekening Bank. Dibayar 1x di awal.
                </li>
                <li>
                    <strong>🏆 Jalur Rapor</strong><br>
                    Rata-rata rapor kelas X & XI minimal 75 otomatis mendapatkan harga BKS Peringkat 4.
                </li>
            </ul>
        </div>
    </div>

    <div id="lokasi" class="content-box">
        <h3 style="color: #2D9CDB; font-weight:700; margin-bottom: 20px;">Lokasi Kampus</h3>
        <p style="margin-bottom: 20px;">
            <strong>Gedung Henricus Constant, Lantai 8</strong><br>
            Universitas Katolik Soegijapranata (Unika Soegijapranata)<br>
            Jl. Pawiyatan Luhur IV/1, Bendan Duwur, Semarang, Jawa Tengah 50234
        </p>
        
        <div class="map-container">
            <iframe 
                src="https://maps.google.com/maps?q=Unika+Soegijapranata+Semarang&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                allowfullscreen>
            </iframe>
        </div>
    </div>

    <div id="kontak" class="content-box" style="background: linear-gradient(to right, #ffffff, #f9fcff); border-left: 5px solid #2D9CDB;">
        <h3 style="color: #333; font-weight:700; margin-bottom: 30px;">Butuh Bantuan Pendaftaran?</h3>
        
        <div class="contact-grid">
            <div class="contact-item">
                <div class="contact-icon">📱</div>
                <div>
                    <strong style="display:block; font-size:1.1rem;">Hotline WA (Sistem Informasi)</strong>
                    <a href="https://wa.me/6281903385595" target="_blank" style="color:#2D9CDB; text-decoration:none; font-weight:bold; font-size:1.1rem;">+62-819-0338-5595</a>
                    <p style="font-size:0.85rem; color:#777; margin-top:5px;">Chat only (Senin - Jumat)</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">📧</div>
                <div>
                    <strong style="display:block; font-size:1.1rem;">Email Resmi</strong>
                    <a href="mailto:si@unika.ac.id" style="color:#2D9CDB; text-decoration:none; font-weight:bold; font-size:1.1rem;">si@unika.ac.id</a>
                    <p style="font-size:0.85rem; color:#777; margin-top:5px;">Untuk pertanyaan akademik & kerjasama</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">🕒</div>
                <div>
                    <strong style="display:block; font-size:1.1rem;">Jam Operasional</strong>
                    <span style="color:#555;">Senin – Jumat</span><br>
                    <span style="color:#777;">08.00 – 15.00 WIB</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>