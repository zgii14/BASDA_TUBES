<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InventarisHimatif</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,700;1,700&display=swap" rel="stylesheet" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" </head>

<body>
    <!-- Navbar start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Inventaris<span>Himatif</span>.</a>

        <div class="navbar-nav">
            <a href="#Home">HOME</a>
            <a href="#about">ABOUT</a>
            <a href="#Menu">DEVELOPER</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar end -->
    <!-- Hero Section start -->
    <section class="hero" id="Home">
        <main class="content">
            <h1>SI Inventaris Himatif <span>Kelompok 3</span></h1>
            <a href="login.php" class="cta">Login</a>
        </main>
    </section>
    <!-- Hero Section end -->
    <!-- About Section Start -->
    <section id="about" class="about">
        <h2><span>About </span>Web</h2>
        <div class="row">
            <div class="about-img">
                <img src="Img/LogoHima.png" alt="Tentang Kami" />
            </div>
            <div class="content">
                <h3>Apa itu Inventaris Himatif ?</h3>
                <p>
                    Sistem Informasi Inventaris HIMATIF (Himpunan Mahasiswa Teknik
                    Informatika)ini adalah suatu sistem yang dirancang oleh kami untuk
                    mengelola inventaris atau aset yang dimiliki oleh HIMATIF, yang
                    merupakan organisasi mahasiswa Teknik Informatika di Universitas
                    Bengkulu . Sistem ini digunakan untuk mendokumentasikan, melacak,
                    dan mengelola semua aset yang dimiliki oleh HIMATIF, seperti
                    barang-barang inventaris, perangkat elektronik, peralatan, perangkat
                    lunak, dokumen, dan sumber daya lain yang diperlukan untuk
                    menjalankan kegiatan dan program HIMATIF.
                </p>
                <p>
                    Sistem Informasi ini dibuat untuk memenuhi tugas besar dari
                    matakuliah Proyek Basis Data yang dibimbing oleh asisten dosen yaitu
                    Siti Zubaidah (G1A021002) dan Vilda Aprilia (G1A021033)
                </p>
            </div>
        </div>
    </section>
    <!-- About Section end -->
    <!-- Feather Icons -->
    <!-- Menu Section Start -->
    <section id="Menu" class="menu">
        <h2><span>Developer </span>Team</h2>
        <p>Berikut anggota kelompok 3 :</p>
        <div class="row">
            <div class="dev-card">
                <img src="Img/menu/2.2.png" alt="Leader" class="dev-card-img" />
                <h3 class="dev-card title">-Muhammad Rozagi-</h3>
                <p class="dev-card-jabatan">G1A022008</p>
            </div>
            <div class="dev-card">
                <img src="Img/menu/2.png" alt="Leader" class="dev-card-img" />
                <h3 class="dev-card title">-Tiesya Andriani Ramdhanti-</h3>
                <p class="dev-card-jabatan">G1A022014</p>
            </div>
            <div class="dev-card">
                <img src="Img/menu/3.png" alt="Leader" class="dev-card-img" />
                <h3 class="dev-card title">-Attika Oktavianti-</h3>
                <p class="dev-card-jabatan">G1A022020</p>
            </div>
            <div class="dev-card">
                <img src="Img/menu/4.png" alt="Leader" class="dev-card-img" />
                <h3 class="dev-card title">-Hikmah Hijrayanti-</h3>
                <p class="dev-card-jabatan">G1A022026</p>
            </div>
        </div>
    </section>
    <!-- Menu Section End -->
    <script>
        feather.replace();
    </script>
    <!-- My Javascript -->
    <script src="js/script.js"></script>
</body>

</html>
