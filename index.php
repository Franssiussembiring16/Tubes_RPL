<?php
session_start();

include("koneksi.php");
include("functions.php");

$user_data = check_login($con);

$id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Hewan Pratama</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Selamat Datang di Pet Care Clinic</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="catalog.html">Catalog</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="order.html">Pesan Antrian</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Apa itu Pusat Klinik Hewan</h2>
        <p>Selamat datang di Pusat Informasi Klinik Hewan Jawa Tengah, tempat memberi Informasi terbaik untuk anda tentang tempat perawatan kesehatan 
            hewan kesayangan Anda. Dengan tim profesional dan fasilitas modern, kami siap memberikan layanan terbaik untuk sahabat berbulu Anda.</p>
        
        <h2>Gambar Contoh</h2>
        <img src="ai_hewan.png" alt="Contoh Gambar">
        
        <h2>Testimoni Klien Yang Telah Berkunjung</h2>
        <p>Berikut adalah testimoni orang orang yang telah mendatangi klinik hewan yang telah bekerjasama dengan platform kami</p>
        <div class="product-grid">
            <div class="product">
                <img src="rsbanyuwangi.jpg" alt="Product 1">
                <h4>RS Banyumas</h4>
                <p>Pelayanan Ramah dan Baik</p>
            </div>
            <div class="product">
                <img src="urgensi.jpg" alt="Product 2">
                <h4>RS Pemalang</h4>
                <p>Tenaga Kerjanya Profesional Banget</p>
            </div>
            <div class="product">
                <img src="rsunud.jpg" alt="Product 3">
                <h4>RS Semarang</h4>
                <p>Dokter dan Perawatnya cantik cantik</p>
            </div>
        </div> 

        <h2>Hewan Apa Saja Yang Bisa DiRawat Di Klinik Hewan </h2>
        <p>Beberapa hewan yang sudah pernah dirawat di klinik yang telah bekerjasama dengan website ini. Diantaranya :</p>
        <div class="product-grid">
            <div class="product">
                <img src="anjing.jpg" alt="Product 1">
                <h4>Anjing</h4>
            </div>
            <div class="product">
                <img src="burung.jpg" alt="Product 2">
                <h4>Burung</h4>
            </div>
            <div class="product">
                <img src="kucing.jpg" alt="Product 3">
                <h4>Kucing</h4>
            </div>
            <div class="product">
                <img src="merak.jpg" alt="Product 4">
                <h4>Merak</h4>
            </div>
            <div class="product">
                <img src="harimau.jpg" alt="Product 5">
                <h4>Harimau</h4>
            </div>
            <div class="product">
                <img src="ayam.jpeg" alt="Product 6">
                <h4>Ayam</h4>
            </div>
            <div class="product">
                <img src="monyet.png" alt="Product 3">
                <h4>Monyet</h4>
            </div>
            <div class="product">
                <img src="kuda.jpg" alt="Product 3">
                <h4>Kuda</h4>
            </div>
            <div class="product">
                <img src="babi.jpg" alt="Product 3">
                <h4>Babi</h4>
            </div>
        </div>              
    </main>
    <footer>
        &copy; Tugas Besar &copy;
    </footer>
</body>
<footer>
    &copy; Tugas Besar &copy;
</footer>

</html>