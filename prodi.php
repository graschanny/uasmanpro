<?php 
include 'header.php'; 
$id = isset($_GET['id']) ? $_GET['id'] : 'si';

// Data Dummy Prodi
if($id == 'si'){
    $judul = "Sistem Informasi";
    $img = "https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80";
    $desc = "Program studi yang fokus pada integrasi teknologi informasi dengan proses bisnis untuk menciptakan solusi sistem yang efisien dan efektif dalam organisasi.";
} elseif($id == 'ec'){
    $judul = "E-Commerce";
    $img = "https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80";
    $desc = "Program studi yang mempelajari strategi bisnis digital, pemasaran online, dan pengembangan platform e-commerce untuk menciptakan technopreneur sukses di era digital.";
} elseif($id == 'gt'){
    $judul = "Game Technology";
    $img = "https://images.unsplash.com/photo-1550745165-9bc0b252726f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80";
    $desc = "Program studi yang mendalami pengembangan game dari sisi teknologi, desain, dan bisnis untuk menciptakan pengalaman gaming yang imersif dan inovatif.";
} else {
    $judul = "Akuntansi Sistem Informasi";
    $img = "https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80";
    $desc = "Program studi yang mengintegrasikan ilmu akuntansi dengan teknologi sistem informasi untuk menghasilkan profesional yang menguasai audit teknologi dan keuangan digital.";
}
?>

<style>
    /* ===== PRODI STYLES ===== */
    .prodi-hero {
        background: linear-gradient(rgba(45, 156, 219, 0.9), rgba(45, 156, 219, 0.8)), url('<?php echo $img; ?>');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 0 60px;
        text-align: center;
        margin-top: 0;
        position: relative;
    }
    
    .prodi-title {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 20px;
        text-shadow: 0 2px 10px rgba(0,0,0,0.3);
    }
    
    .prodi-subtitle {
        font-size: 1.3rem;
        max-width: 800px;
        margin: 0 auto;
        opacity: 0.95;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .section-title {
        font-size: 2.2rem;
        color: #2D9CDB;
        margin: 50px 0 30px;
        position: relative;
        padding-bottom: 10px;
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 80px;
        height: 4px;
        background: #FFC107;
        border-radius: 2px;
    }
    
    .content-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin: 40px 0;
    }
    
    .info-card {
        background: white;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        transition: transform 0.3s ease;
    }
    
    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    }
    
    .info-card h3 {
        color: #2D9CDB;
        margin-bottom: 20px;
        font-size: 1.5rem;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .info-card h3 i {
        color: #FFC107;
    }
    
    .course-list {
        list-style: none;
        padding: 0;
    }
    
    .course-list li {
        padding: 12px 0;
        border-bottom: 1px solid #eee;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .course-list li:last-child {
        border-bottom: none;
    }
    
    .course-list li i {
        color: #2D9CDB;
        font-size: 0.9rem;
    }
    
    .career-card {
        background: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 15px;
        border-left: 4px solid #2D9CDB;
    }
    
    .career-card h4 {
        color: #333;
        margin-bottom: 5px;
        font-size: 1.1rem;
    }
    
    .career-card p {
        color: #666;
        font-size: 0.9rem;
        margin: 0;
    }
    
    .stats-box {
        text-align: center;
        padding: 20px;
        background: linear-gradient(135deg, #2D9CDB 0%, #1a7bb8 100%);
        color: white;
        border-radius: 10px;
    }
    
    .stats-box h3 {
        font-size: 2.5rem;
        margin-bottom: 5px;
    }
    
    .stats-box p {
        opacity: 0.9;
        font-size: 0.9rem;
    }
    
    .prodi-nav {
        display: flex;
        gap: 15px;
        margin: 30px 0;
        flex-wrap: wrap;
    }
    
    .prodi-nav a {
        padding: 10px 20px;
        background: white;
        border: 2px solid #2D9CDB;
        border-radius: 30px;
        text-decoration: none;
        color: #2D9CDB;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .prodi-nav a:hover {
        background: #2D9CDB;
        color: white;
    }
    
    .btn-primary {
        display: inline-block;
        background: #FFC107;
        color: #333;
        padding: 12px 30px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        font-size: 1rem;
    }
    
    .btn-primary:hover {
        background: #FFB300;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 193, 7, 0.3);
        color: #333;
    }
    
    .highlight-box {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 12px;
        padding: 30px;
        margin: 40px 0;
        border-left: 5px solid #FFC107;
    }
    
    .tool-tech-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 15px;
        margin-top: 20px;
    }
    
    .tool-tech-item {
        background: white;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
    }
    
    .tool-tech-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .tool-tech-item img {
        height: 40px;
        margin-bottom: 10px;
    }
    
    @media (max-width: 768px) {
        .prodi-title {
            font-size: 2.2rem;
        }
        
        .content-grid {
            grid-template-columns: 1fr;
        }
        
        .prodi-nav {
            justify-content: center;
        }
    }
</style>

<!-- HERO SECTION -->
<section class="prodi-hero">
    <div class="container">
        <h1 class="prodi-title"><?php echo $judul; ?></h1>
        <p class="prodi-subtitle"><?php echo $desc; ?></p>
    </div>
</section>

<div class="container">
    <!-- Navigation to Other Prodi -->
    <div class="prodi-nav">
        <a href="prodi.php?id=si">Sistem Informasi</a>
        <a href="prodi.php?id=ec">E-Commerce</a>
        <a href="prodi.php?id=gt">Game Technology</a>
        <a href="prodi.php?id=aksi">Akuntansi SI</a>
    </div>

    <!-- STATISTICS -->
    <div class="content-grid">
        <div class="stats-box">
            <h3>4</h3>
            <p>Tahun Masa Studi</p>
        </div>
        <div class="stats-box">
            <h3>144</h3>
            <p>SKS Total</p>
        </div>
        <div class="stats-box">
            <h3>95%</h3>
            <p>Tingkat Penyerapan Kerja</p>
        </div>
        <div class="stats-box">
            <h3>Rp 8-15jt</h3>
            <p>Gaji Awal Lulusan</p>
        </div>
    </div>

    <!-- APA YANG AKAN DIPELAJARI? -->
    <h2 class="section-title">Apa Yang Akan Dipelajari?</h2>
    
    <?php if($id == 'si'): ?>
    <!-- SISTEM INFORMASI -->
    <div class="content-grid">
        <div class="info-card">
            <h3><i class="fas fa-brain"></i> Kecerdasan Bisnis & Analitika</h3>
            <ul class="course-list">
                <li><i class="fas fa-check"></i> Data Mining & Warehousing</li>
                <li><i class="fas fa-check"></i> Business Intelligence System</li>
                <li><i class="fas fa-check"></i> Predictive Analytics</li>
                <li><i class="fas fa-check"></i> Dashboard & Reporting Tools</li>
            </ul>
        </div>
        
        <div class="info-card">
            <h3><i class="fas fa-project-diagram"></i> Sistem Enterprise</h3>
            <ul class="course-list">
                <li><i class="fas fa-check"></i> Enterprise Resource Planning (ERP)</li>
                <li><i class="fas fa-check"></i> Customer Relationship Management (CRM)</li>
                <li><i class="fas fa-check"></i> Supply Chain Management (SCM)</li>
                <li><i class="fas fa-check"></i> Sistem Informasi Akuntansi</li>
            </ul>
        </div>
        
        <div class="info-card">
            <h3><i class="fas fa-shield-alt"></i> Audit & Keamanan Sistem</h3>
            <ul class="course-list">
                <li><i class="fas fa-check"></i> IT Governance & Audit</li>
                <li><i class="fas fa-check"></i> Cybersecurity Management</li>
                <li><i class="fas fa-check"></i> Risk Management</li>
                <li><i class="fas fa-check"></i> Compliance & Regulation</li>
            </ul>
        </div>
    </div>
    
    <?php elseif($id == 'ec'): ?>
    <!-- E-COMMERCE -->
    <div class="content-grid">
        <div class="info-card">
            <h3><i class="fas fa-shopping-cart"></i> Digital Business Strategy</h3>
            <ul class="course-list">
                <li><i class="fas fa-check"></i> E-Business Models</li>
                <li><i class="fas fa-check"></i> Digital Transformation</li>
                <li><i class="fas fa-check"></i> Online Market Analysis</li>
                <li><i class="fas fa-check"></i> Startup Development</li>
            </ul>
        </div>
        
        <div class="info-card">
            <h3><i class="fas fa-chart-line"></i> Digital Marketing & Analytics</h3>
            <ul class="course-list">
                <li><i class="fas fa-check"></i> Social Media Marketing</li>
                <li><i class="fas fa-check"></i> SEO & SEM Optimization</li>
                <li><i class="fas fa-check"></i> Content Strategy</li>
                <li><i class="fas fa-check"></i> Web Analytics Tools</li>
            </ul>
        </div>
        
        <div class="info-card">
            <h3><i class="fas fa-code"></i> E-Commerce Technology</h3>
            <ul class="course-list">
                <li><i class="fas fa-check"></i> E-Commerce Platform Development</li>
                <li><i class="fas fa-check"></i> Payment Gateway Integration</li>
                <li><i class="fas fa-check"></i> Mobile Commerce Apps</li>
                <li><i class="fas fa-check"></i> Cloud Infrastructure</li>
            </ul>
        </div>
    </div>
    
    <?php elseif($id == 'gt'): ?>
    <!-- GAME TECHNOLOGY -->
    <div class="content-grid">
        <div class="info-card">
            <h3><i class="fas fa-gamepad"></i> Game Development</h3>
            <ul class="course-list">
                <li><i class="fas fa-check"></i> Unity & Unreal Engine</li>
                <li><i class="fas fa-check"></i> Game Programming (C#, C++)</li>
                <li><i class="fas fa-check"></i> Game Physics & Mathematics</li>
                <li><i class="fas fa-check"></i> Multiplayer Networking</li>
            </ul>
        </div>
        
        <div class="info-card">
            <h3><i class="fas fa-paint-brush"></i> Game Design & Art</h3>
            <ul class="course-list">
                <li><i class="fas fa-check"></i> 2D/3D Character Design</li>
                <li><i class="fas fa-check"></i> Environment Modeling</li>
                <li><i class="fas fa-check"></i> Animation & Rigging</li>
                <li><i class="fas fa-check"></i> UI/UX for Games</li>
            </ul>
        </div>
        
        <div class="info-card">
            <h3><i class="fas fa-robot"></i> Advanced Game Tech</h3>
            <ul class="course-list">
                <li><i class="fas fa-check"></i> Artificial Intelligence in Games</li>
                <li><i class="fas fa-check"></i> AR/VR Development</li>
                <li><i class="fas fa-check"></i> Game Analytics</li>
                <li><i class="fas fa-check"></i> Esports Management</li>
            </ul>
        </div>
    </div>
    
    <?php else: ?>
    <!-- AKUNTANSI SISTEM INFORMASI -->
    <div class="content-grid">
        <div class="info-card">
            <h3><i class="fas fa-calculator"></i> Digital Accounting</h3>
            <ul class="course-list">
                <li><i class="fas fa-check"></i> Accounting Information System</li>
                <li><i class="fas fa-check"></i> Financial Technology (FinTech)</li>
                <li><i class="fas fa-check"></i> Digital Audit Procedures</li>
                <li><i class="fas fa-check"></i> Blockchain in Accounting</li>
            </ul>
        </div>
        
        <div class="info-card">
            <h3><i class="fas fa-chart-bar"></i> Data Analytics for Finance</h3>
            <ul class="course-list">
                <li><i class="fas fa-check"></i> Financial Data Mining</li>
                <li><i class="fas fa-check"></i> Predictive Financial Modeling</li>
                <li><i class="fas fa-check"></i> Risk Analytics</li>
                <li><i class="fas fa-check"></i> Regulatory Compliance Tech</li>
            </ul>
        </div>
        
        <div class="info-card">
            <h3><i class="fas fa-network-wired"></i> Enterprise Systems</h3>
            <ul class="course-list">
                <li><i class="fas fa-check"></i> SAP FICO Implementation</li>
                <li><i class="fas fa-check"></i> Oracle Financials</li>
                <li><i class="fas fa-check"></i> ERP Configuration</li>
                <li><i class="fas fa-check"></i> Business Process Integration</li>
            </ul>
        </div>
    </div>
    <?php endif; ?>

    <!-- TOOLS & TECHNOLOGY -->
    <h2 class="section-title">Tools & Teknologi yang Dikuasai</h2>
    <div class="tool-tech-grid">
        <?php 
        $tools = [];
        if($id == 'si'){
            $tools = ['Figma', 'SAP', 'Oracle', 'Tableau', 'Power BI', 'MySQL', 'Python', 'Java'];
        } elseif($id == 'ec'){
            $tools = ['Shopify', 'WooCommerce', 'Google Analytics', 'Facebook Ads', 'Adobe Suite', 'React', 'Node.js', 'MongoDB'];
        } elseif($id == 'gt'){
            $tools = ['Unity', 'Unreal Engine', 'Blender', 'Maya', 'Substance Painter', 'C#', 'C++', 'Photoshop'];
        } else {
            $tools = ['SAP FICO', 'QuickBooks', 'Microsoft Dynamics', 'ACL Analytics', 'Excel Advanced', 'SQL', 'R', 'Power BI'];
        }
        
        foreach($tools as $tool): 
        ?>
        <div class="tool-tech-item">
            <div style="font-size: 2rem; color: #2D9CDB; margin-bottom: 10px;">
                <i class="fas fa-tools"></i>
            </div>
            <strong><?php echo $tool; ?></strong>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- PROSPEK KARIR -->
    <h2 class="section-title">Prospek Karir Lulusan</h2>
    <div class="content-grid">
        <?php 
        $careers = [];
        if($id == 'si'){
            $careers = [
                ['title' => 'System Analyst', 'desc' => 'Analisis kebutuhan bisnis dan merancang solusi sistem informasi'],
                ['title' => 'IT Project Manager', 'desc' => 'Memimpin proyek pengembangan sistem dari awal hingga implementasi'],
                ['title' => 'Business Intelligence Consultant', 'desc' => 'Membantu perusahaan mengambil keputusan berbasis data'],
                ['title' => 'ERP Consultant', 'desc' => 'Mengimplementasikan dan mengustomisasi sistem ERP'],
            ];
        } elseif($id == 'ec'){
            $careers = [
                ['title' => 'Digital Marketing Manager', 'desc' => 'Mengelola strategi pemasaran digital perusahaan'],
                ['title' => 'E-Commerce Specialist', 'desc' => 'Mengembangkan dan mengoptimalkan platform toko online'],
                ['title' => 'Product Manager (Digital)', 'desc' => 'Mengelola produk digital dari konsep hingga launch'],
                ['title' => 'Startup Founder', 'desc' => 'Mendirikan dan mengembangkan startup teknologi'],
            ];
        } elseif($id == 'gt'){
            $careers = [
                ['title' => 'Game Developer', 'desc' => 'Mengembangkan game untuk berbagai platform'],
                ['title' => 'Technical Artist', 'desc' => 'Menjembatani antara seni dan teknologi dalam pengembangan game'],
                ['title' => 'Game Designer', 'desc' => 'Merancang gameplay, cerita, dan mekanika game'],
                ['title' => 'VR/AR Developer', 'desc' => 'Mengembangkan aplikasi realitas virtual dan augmented'],
            ];
        } else {
            $careers = [
                ['title' => 'IT Auditor', 'desc' => 'Mengaudit sistem informasi dan keamanan data perusahaan'],
                ['title' => 'Financial Systems Analyst', 'desc' => 'Analisis dan optimasi sistem keuangan perusahaan'],
                ['title' => 'Compliance Officer', 'desc' => 'Memastikan kepatuhan terhadap regulasi teknologi finansial'],
                ['title' => 'FinTech Consultant', 'desc' => 'Konsultan teknologi finansial untuk perbankan dan startup'],
            ];
        }
        
        foreach($careers as $career): 
        ?>
        <div class="career-card">
            <h4><?php echo $career['title']; ?></h4>
            <p><?php echo $career['desc']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- HIGHLIGHT -->
    <div class="highlight-box">
        <h3 style="color: #2D9CDB; margin-bottom: 15px;">Keunggulan Program Studi</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
            <div>
                <h4 style="color: #333; margin-bottom: 10px;">🎯 Kurikulum Berbasis Industri</h4>
                <p style="color: #666; margin: 0;">Dikembangkan bersama mitra industri ternama</p>
            </div>
            <div>
                <h4 style="color: #333; margin-bottom: 10px;">💼 Magang Garansi</h4>
                <p style="color: #666; margin: 0;">Jaminan magang di perusahaan mitra SIEGA</p>
            </div>
            <div>
                <h4 style="color: #333; margin-bottom: 10px;">🌐 Sertifikasi Internasional</h4>
                <p style="color: #666; margin: 0;">Kesempatan mendapatkan sertifikasi global</p>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div style="text-align: center; margin: 50px 0;">
        <h3 style="color: #333; margin-bottom: 20px;">Tertarik dengan Program Ini?</h3>
        <p style="color: #666; margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto;">
            Bergabunglah dengan <?php echo $judul; ?> dan raih kesuksesan karier di era digital.
            Daftarkan diri Anda sekarang dan mulailah perjalanan akademik yang menarik!
        </p>
        <a href="info_pendaftaran.php" class="btn-primary">Daftar Sekarang</a>
    </div>
</div>

<!-- Font Awesome untuk Ikon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<?php include 'footer.php'; ?>