<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Wisata Harmoni</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <img src="images/header.jpg" alt="Pemandangan Desa" class="header-image">
            <h1>Desa Wisata Harmoni</h1>
            <nav>
                <ul>
                    <li><a href="#tentang">Tentang Kami</a></li>
                    <li><a href="#galeri">Galeri</a></li>
                    <li><a href="#villa">Sewa Villa</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section id="hero">
            <div class="hero-content">
                <h2>Selamat Datang di Desa Wisata Harmoni</h2>
                <p>Rasakan suasana pedesaan yang asri dan alami. Pilihan terbaik untuk liburan Anda!</p>
                <a href="#villa" class="btn">Pesan Villa Sekarang</a>
            </div>
        </section>

        <section id="tentang" class="content-section">
            <h2>Tentang Kami</h2>
            <p>Desa Wisata Harmoni adalah destinasi wisata berbasis alam dan budaya. Kami menawarkan pengalaman unik bagi pengunjung untuk menikmati keindahan desa, mempelajari tradisi lokal, dan bersantai di villa nyaman kami.</p>
        </section>

        <section id="galeri" class="content-section">
            <h2>Galeri</h2>
            <div class="gallery">
                <div class="gallery-item">
                    <img src="images/villa1.jpg" alt="Villa 1">
                    <p>Villa Asri</p>
                    <form action="keranjang.php" method="post">
                        <input type="hidden" name="villa_id" value="villa1">
                        <input type="hidden" name="villa_name" value="Villa Asri">
                        <input type="hidden" name="price" value="500000">
                        <button type="submit" class="btn">Tambah ke Keranjang</button>
                    </form>
                </div>
                <div class="gallery-item">
                    <img src="images/villa2.jpg" alt="Villa 2">
                    <p>Villa Harmoni</p>
                    <form action="keranjang.php" method="post">
                        <input type="hidden" name="villa_id" value="villa2">
                        <input type="hidden" name="villa_name" value="Villa Harmoni">
                        <input type="hidden" name="price" value="1000000">
                        <button type="submit" class="btn">Tambah ke Keranjang</button>
                    </form>
                </div>
            </div>
        </section>

        <section id="villa" class="content-section">
    <h2>Sewa Villa</h2>
    <p>Kami menyediakan beberapa pilihan villa dengan fasilitas terbaik untuk keluarga dan rombongan.</p>
    <div class="villa-list">
        <div class="villa-item" id="villa-asri">
            <img src="images/villa1.jpg" alt="Villa Asri">
            <h3>Villa Asri</h3>
            <p>Kapasitas: 8 orang</p>
            <p>Fasilitas: Kolam renang, dapur lengkap, Wi-Fi.</p>
            <form action="keranjang.php" method="post">
                <input type="hidden" name="villa_id" value="villa1">
                <input type="hidden" name="villa_name" value="Villa Asri">
                <input type="hidden" name="price" value="500000"> <
                <button type="submit" class="btn">Tambah ke Keranjang</button>
            </form>
        </div>
        <div class="villa-item" id="villa-harmoni">
            <img src="images/villa2.jpg" alt="Villa Harmoni">
            <h3>Villa Harmoni</h3>
            <p>Kapasitas: 12 orang</p>
            <p>Fasilitas: Pemandangan alam, BBQ area, parkir luas.</p>
            <form action="keranjang.php" method="post">
                <input type="hidden" name="villa_id" value="villa2">
                <input type="hidden" name="villa_name" value="Villa Harmoni">
                <input type="hidden" name="price" value="600000"> 
                <button type="submit" class="btn">Tambah ke Keranjang</button>
            </form>
        </div>
        <div class="villa-item" id="villa-sejuk">
            <img src="images/villa3.jpg" alt="Villa Sejuk">
            <h3>Villa Sejuk</h3>
            <p>Kapasitas: 10 orang</p>
            <p>Fasilitas: Udara sejuk, taman luas, ruang keluarga.</p>
            <form action="keranjang.php" method="post">
                <input type="hidden" name="villa_id" value="villa3">
                <input type="hidden" name="villa_name" value="Villa Sejuk">
                <input type="hidden" name="price" value="550000"> 
                <button type="submit" class="btn">Tambah ke Keranjang</button>
            </form>
        </div>
    </div>
</section>


        <section id="kontak" class="content-section">
            <h2>Kontak Kami</h2>
            <p>Hubungi kami untuk informasi lebih lanjut:</p>
            <ul>
                <li>Email: info@desaharmoni.com</li>
                <li>Telepon: 0812-3456-7890</li>
                <li>Alamat: Jl. Harmoni Raya, Desa Harmoni, Jawa Barat</li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Desa Wisata Harmoni. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>
