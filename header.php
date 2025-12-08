<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi & Teknologi</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    
    <style>
        /* ===== RESET & BASE ===== */
        :root {
            --primary-blue: #2D9CDB;
            --secondary-yellow: #FFC107;
            --dark-text: #333333;
            --white: #ffffff;
            --shadow-light: 0 2px 15px rgba(0, 0, 0, 0.05);
            --shadow-medium: 0 5px 20px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark-text);
            padding-top: 65px !important; /* Spacing untuk fixed navbar */
            overflow-x: hidden;
        }
        
        /* ===== NAVBAR BARU - SUPER TIPIS ===== */
        .main-navbar {
            background: var(--white);
            box-shadow: var(--shadow-light);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
            transition: var(--transition);
            /* NAVBAR TIPIS: Tinggi minimal */
            min-height: 65px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        
        /* Container navbar */
        .nav-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        /* ===== LOGO ===== */
        .logo-wrapper {
            display: flex;
            align-items: center;
            padding: 2px 0;
            height: 65px;
        }
        
        .logo-link {
            display: block;
            height: 100%;
            display: flex;
            align-items: center;
        }
        
        .logo-img {
            height: 50px;
            width: auto;
            max-height: 50px;
            object-fit: contain;
            transition: var(--transition);
        }
        
        /* ===== NAVIGATION MENU ===== */
        .nav-menu {
            display: flex;
            align-items: center;
            list-style: none;
            margin: 0;
            padding: 0;
            height: 100%;
        }
        
        .nav-item {
            position: relative;
            margin: 0 1px;
            height: 100%;
            display: flex;
            align-items: center;
        }
        
        .nav-link {
            color: var(--dark-text);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            padding: 8px 14px;
            border-radius: 4px;
            transition: var(--transition);
            display: flex;
            align-items: center;
            height: 100%;
            position: relative;
            white-space: nowrap;
        }
        
        .nav-link:hover {
            color: var(--primary-blue);
            background: rgba(45, 156, 219, 0.05);
        }
        
        /* Active link indicator */
        .nav-link.active {
            color: var(--primary-blue);
            font-weight: 600;
        }
        
        .nav-link.active::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 70%;
            height: 3px;
            background: var(--primary-blue);
            border-radius: 3px 3px 0 0;
        }
        
        /* ===== DROPDOWN MENU (FIXED) ===== */
        .dropdown {
            position: relative;
        }
        
        .dropdown-toggle {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        
        .dropdown-toggle::after {
            content: '\f078';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            margin-left: 6px;
            font-size: 11px;
            border: none;
            vertical-align: middle;
            transition: transform 0.3s ease;
        }
        
        .dropdown:hover .dropdown-toggle::after {
            transform: rotate(180deg);
        }
        
        /* DROPDOWN MENU STYLING - INI YANG DIPERBAIKI */
        .dropdown-content {
            position: absolute;
            top: 100%;
            left: 0;
            background: var(--white);
            min-width: 200px;
            box-shadow: var(--shadow-medium);
            border-radius: 8px;
            padding: 8px 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: 1000;
            border: 1px solid rgba(0,0,0,0.08);
            overflow: hidden;
        }
        
        /* Dropdown tampil saat hover */
        .dropdown:hover .dropdown-content {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .dropdown-item {
            display: block;
            padding: 10px 18px;
            color: var(--dark-text);
            text-decoration: none;
            font-size: 13.5px;
            transition: all 0.2s ease;
            border-left: 3px solid transparent;
            position: relative;
        }
        
        .dropdown-item:hover {
            background: rgba(45, 156, 219, 0.08);
            color: var(--primary-blue);
            padding-left: 22px;
            border-left-color: var(--primary-blue);
            transform: translateX(5px);
        }
        
        .dropdown-divider {
            height: 1px;
            background: #eee;
            margin: 6px 15px;
        }
        
        /* ===== BUTTON DAFTAR ===== */
        .btn-daftar {
            background: linear-gradient(135deg, var(--secondary-yellow) 0%, #FF9800 100%);
            color: var(--white) !important;
            border: none;
            border-radius: 50px;
            padding: 7px 20px !important;
            font-size: 13.5px;
            font-weight: 600;
            box-shadow: 0 3px 10px rgba(255, 193, 7, 0.3);
            transition: var(--transition);
            margin-left: 8px;
            display: inline-flex;
            align-items: center;
            cursor: pointer;
        }
        
        .btn-daftar i {
            margin-right: 5px;
            font-size: 12px;
        }
        
        .btn-daftar:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.4);
            background: linear-gradient(135deg, #FFB300 0%, #F57C00 100%);
            color: var(--white);
        }
        
        /* ===== MOBILE TOGGLE BUTTON ===== */
        .mobile-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 22px;
            color: var(--dark-text);
            cursor: pointer;
            padding: 8px;
            border-radius: 4px;
            transition: var(--transition);
        }
        
        .mobile-toggle:hover {
            color: var(--primary-blue);
            background: rgba(45, 156, 219, 0.05);
        }
        
        /* ===== RESPONSIVE DESIGN ===== */
        @media (max-width: 991px) {
            body {
                padding-top: 60px !important;
            }
            
            .main-navbar {
                min-height: 60px;
            }
            
            .mobile-toggle {
                display: block;
            }
            
            .nav-menu {
                position: fixed;
                top: 60px;
                left: 0;
                width: 100%;
                background: var(--white);
                flex-direction: column;
                align-items: flex-start;
                padding: 15px;
                box-shadow: var(--shadow-medium);
                opacity: 0;
                visibility: hidden;
                transform: translateY(-15px);
                transition: var(--transition);
                height: auto;
                max-height: calc(100vh - 60px);
                overflow-y: auto;
                z-index: 9998;
            }
            
            .nav-menu.active {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }
            
            .nav-item {
                width: 100%;
                margin: 0;
                height: auto;
                border-bottom: 1px solid #eee;
            }
            
            .nav-item:last-child {
                border-bottom: none;
            }
            
            .nav-link {
                padding: 12px 0;
                width: 100%;
                height: auto;
                justify-content: space-between;
            }
            
            .nav-link.active::before {
                display: none;
            }
            
            .nav-link.active {
                background: rgba(45, 156, 219, 0.08);
                border-radius: 6px;
                padding-left: 15px;
            }
            
            /* DROPDOWN MOBILE STYLING */
            .dropdown-content {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                box-shadow: none;
                border: none;
                padding: 0;
                width: 100%;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.4s ease;
                background: rgba(0,0,0,0.01);
                border-radius: 0;
                margin-left: 15px;
                display: block !important;
            }
            
            .dropdown.active .dropdown-content {
                max-height: 300px;
                padding: 8px 0;
                margin-top: 5px;
                border-left: 2px solid var(--primary-blue);
            }
            
            .dropdown-toggle::after {
                content: '\f078';
                transition: transform 0.3s ease;
            }
            
            .dropdown.active .dropdown-toggle::after {
                transform: rotate(180deg);
            }
            
            .dropdown-item {
                padding: 8px 15px;
                font-size: 13px;
            }
            
            .dropdown-item:hover {
                transform: none;
                padding-left: 18px;
            }
            
            .btn-daftar {
                margin: 10px 0 5px 0;
                width: 100%;
                justify-content: center;
                padding: 10px 20px !important;
            }
            
            .logo-img {
                height: 45px;
            }
            
            .logo-wrapper {
                height: 60px;
            }
        }
        
        /* ===== SCROLL EFFECT ===== */
        .main-navbar.scrolled {
            min-height: 60px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        .main-navbar.scrolled .logo-img {
            height: 45px;
        }
        
        .main-navbar.scrolled .logo-wrapper {
            height: 60px;
        }
        
        /* ===== ANIMATIONS ===== */
        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        .main-navbar {
            animation: slideDown 0.5s ease;
        }
        
        /* Dropdown animation */
        @keyframes dropdownFadeIn {
            from {
                opacity: 0;
                transform: translateY(10px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
        
        .dropdown-content {
            animation: dropdownFadeIn 0.3s ease-out;
        }
    </style>
</head>
<body>
    <!-- NAVBAR BARU - TIPIS -->
    <nav class="main-navbar" id="mainNavbar">
        <div class="nav-container">
            <!-- Logo -->
            <div class="logo-wrapper">
                <a href="index.php" class="logo-link">
                    <img src="siega.jpg" alt="Logo SIEGA" class="logo-img">
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle menu">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Navigation Menu -->
            <ul class="nav-menu" id="navMenu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                        Beranda
                    </a>
                </li>

                <!-- Program Studi Dropdown - DIPERBAIKI -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle">
                        Konsentrasi
                    </a>
                    <div class="dropdown-content">
                        <a href="prodi.php?id=si" class="dropdown-item">Sistem Informasi</a>
                        <a href="prodi.php?id=ec" class="dropdown-item">E-Commerce</a>
                        <a href="prodi.php?id=gt" class="dropdown-item">Game Technology</a>
                        <div class="dropdown-divider"></div>
                        <a href="prodi.php?id=aksi" class="dropdown-item">Akuntansi SI</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="tentang_kami.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'tentang_kami.php' ? 'active' : ''; ?>">
                        Tentang Kami
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="akademik.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'akademik.php' ? 'active' : ''; ?>">
                        Akademik & Karya
                    </a>
                </li>

                <li class="nav-item">
                    <a href="berita.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'berita.php' ? 'active' : ''; ?>">
                        Berita
                    </a>
                </li>

                <!-- Daftar Button -->
                <li class="nav-item">
                    <a href="info_pendaftaran.php" class="nav-link btn-daftar">
                        <i class="fas fa-user-plus"></i> Daftar Sekarang
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- JavaScript untuk Navbar - DIPERBAIKI -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elemen DOM
            const mobileToggle = document.getElementById('mobileToggle');
            const navMenu = document.getElementById('navMenu');
            const mainNavbar = document.getElementById('mainNavbar');
            const dropdowns = document.querySelectorAll('.dropdown');
            
            // Mobile Menu Toggle
            mobileToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                navMenu.classList.toggle('active');
                mobileToggle.innerHTML = navMenu.classList.contains('active') 
                    ? '<i class="fas fa-times"></i>' 
                    : '<i class="fas fa-bars"></i>';
            });
            
            // Dropdown untuk mobile - SIMPLE VERSION
            dropdowns.forEach(dropdown => {
                const toggle = dropdown.querySelector('.dropdown-toggle');
                
                toggle.addEventListener('click', function(e) {
                    if (window.innerWidth <= 991) {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        // Close other dropdowns
                        dropdowns.forEach(other => {
                            if (other !== dropdown) {
                                other.classList.remove('active');
                            }
                        });
                        
                        // Toggle current dropdown
                        dropdown.classList.toggle('active');
                    }
                });
            });
            
            // Dropdown untuk desktop (hover) - FIXED
            if (window.innerWidth > 991) {
                dropdowns.forEach(dropdown => {
                    dropdown.addEventListener('mouseenter', function() {
                        this.classList.add('hover');
                    });
                    
                    dropdown.addEventListener('mouseleave', function() {
                        this.classList.remove('hover');
                    });
                });
            }
            
            // Close menu when clicking outside (mobile)
            document.addEventListener('click', function(e) {
                if (window.innerWidth <= 991) {
                    if (!navMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
                        navMenu.classList.remove('active');
                        mobileToggle.innerHTML = '<i class="fas fa-bars"></i>';
                        
                        // Close all dropdowns
                        dropdowns.forEach(dropdown => {
                            dropdown.classList.remove('active');
                        });
                    }
                }
            });
            
            // Close dropdowns when clicking on dropdown item
            const dropdownItems = document.querySelectorAll('.dropdown-item');
            dropdownItems.forEach(item => {
                item.addEventListener('click', function() {
                    if (window.innerWidth <= 991) {
                        navMenu.classList.remove('active');
                        mobileToggle.innerHTML = '<i class="fas fa-bars"></i>';
                        
                        dropdowns.forEach(dropdown => {
                            dropdown.classList.remove('active');
                        });
                    }
                });
            });
            
            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                if (window.scrollY > 10) {
                    mainNavbar.classList.add('scrolled');
                } else {
                    mainNavbar.classList.remove('scrolled');
                }
            });
            
            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 991) {
                    navMenu.classList.remove('active');
                    mobileToggle.innerHTML = '<i class="fas fa-bars"></i>';
                    
                    dropdowns.forEach(dropdown => {
                        dropdown.classList.remove('active');
                    });
                }
            });
            
            // Set active link based on current page
            const currentPage = window.location.pathname.split('/').pop() || 'index.php';
            const navLinks = document.querySelectorAll('.nav-link:not(.btn-daftar)');
            
            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === currentPage) {
                    link.classList.add('active');
                }
            });
            
            // Handle dropdown items active state
            const urlParams = new URLSearchParams(window.location.search);
            const prodiId = urlParams.get('id');
            
            if (prodiId) {
                const prodiLinks = document.querySelectorAll('.dropdown-item');
                prodiLinks.forEach(link => {
                    if (link.href.includes('id=' + prodiId)) {
                        link.style.backgroundColor = 'rgba(45, 156, 219, 0.1)';
                        link.style.fontWeight = '600';
                    }
                });
            }
            
            console.log('Navbar SIEGA loaded successfully!');
        });
    </script>
</body>
</html>