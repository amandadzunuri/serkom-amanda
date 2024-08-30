<?php
include "function.php";

$data_hotel = ambil_data("SELECT * FROM hotel");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <style>
        nav img{
            width: 50px;
        }
        .card-body {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            background-color: #f9f9f9;
            margin-left: 25px;
        }

        .card-tbody {
            flex-grow: 1;
            margin: 10px;
        }

        .card img{
            height: 200px;
        }

        .custom-navbar {
        background-color: #193028;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-image: ;
        }

        /*
        .jumbotron {
            background-image: url("https://images.unsplash.com/photo-1631048649038-e31d38df5a25?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
        }*/

        .jumbotron {
            position: relative; /* Tambahkan posisi relatif untuk pengaturan posisi ::before */
            background-image: url("https://images.unsplash.com/photo-1631048649038-e31d38df5a25?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            height: 65vh; /* Sesuaikan tinggi jumbotron */
        }

        .jumbotron::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.2); /* Warna hitam dengan opacity 30% */
            z-index: 1; /* Pastikan lapisan hitam berada di atas gambar */
        }

        .jumbotron .content {
            position: relative;
            z-index: 2; /* Pastikan konten di atas lapisan hitam */
            color: white; /* Warna teks agar lebih kontras */
            text-align: center;
            padding-top: 50px; /* Sesuaikan padding untuk menempatkan teks */
        }

        .text-box {
            width: 80%; /* Atur lebar sesuai kebutuhan */
            max-width: 450px;/* Optional: Background color to visualize */
        }

        .background-section {
            background-image: url('https://pixabay.com/id/photos/hotel-raja-kasur-kamar-tidur-4340863/'); /* Ganti dengan path gambar Anda */
            background-size: cover; /* Atur gambar untuk menutupi elemen */
            background-position: center; /* Posisikan gambar di tengah elemen */
            background-repeat: no-repeat; /* Jangan ulang gambar */
            /* Warna teks yang kontras dengan background */
            padding: 40px;
        }

        .card-title{
            font-weight: bold;
        }

        
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar px-5 navbar-expand-lg navbar-dark custom-navbar">
        
        <a class="navbar-brand" href="index.php"><img src="src/images/logo-hotel.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#product">Produk Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="#price">Daftar Harga</a></li>
                <li class="nav-item"><a class="nav-link" href="daftar_pesanan.php">Daftar Pesanan</a></li>
                <li class="nav-item"><a class="nav-link" href="pesan.php">Pesan Kamar</a></li>
                <li class="nav-item"><a class="nav-link" href="#aboutus">Tentang Kami</a></li>
            </ul>
        </div>
    </nav>

    <!-- header -->
    <div class="background-section" style="padding: 40px">
        <div class="jumbotron">
            <h1 class="text-box" style="font-weight: bold;">Rasakan Kenyamanan dan Keanggunan di Grand Elphira Hotel</h1>
            <p class="text-box"> Nikmati kenyamanan dan layanan berkelas di hotel kami, pilihan terbaik untuk perjalanan bisnis maupun liburan Anda.</p>
            <a class="btn custom-navbar text-light" href="pesan.php" role="button">Pesan Sekarang</a>
        </div>
    </div>

    <!-- Product -->
    <div class="" id="product" style="padding: 40px;">
        <h2 style="font-weight: bold;" class="text-center">Liburan Sempurna Menunggu Anda</h2>
        <p class="text-center">Kamar yang Kami Tawarkan</p>
        <div class="row">
            <?php foreach ($data_hotel as $dh) { ?>
                <a href="./kamar_hotel.php?<?= implode("_", explode(" ", strtolower($dh["jenis_kamar_hotel"]))); ?>" class="col-md-4">
                <div class="card" style="color: black;"> 
                    <img width="300" src="./src/images/<?= $dh["foto_hotel"]."1.jpg"; ?>"  alt="Kamar Standar" class="card-img-top">
                    <div class="card-tbody" style="padding: 15px 0 15px 0;">
                        <h5 class="card-title" style="font-weight: bold;"><?= $dh["jenis_kamar_hotel"]; ?></h5>
                        <p class="card-text">Kamar dengan fasilitas <?= explode(" ", $dh["jenis_kamar_hotel"])[1]; ?>.</p>
                    </div>
                </div>
                </a>
            <?php } ?>
        </div>
    </div>

    <!-- Daftar Harga -->
    <div class="py-5 " id="price" style="padding: 40px;">
        <h2 style="font-weight: bold;" class="text-center">Daftar Harga</h2>
        <p class="text-center">Temukan Kamar yang Sesuai dengan Budget Anda</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Jenis Kamar</th>
                    <th>Harga per Malam</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data_hotel as $dh) { ?>
                <?php $rpice = number_format($dh["harga"], 0, ',', '.'); ?>
                <tr>
                    <td><?= $dh["jenis_kamar_hotel"]; ?></td>
                    <td>Rp. <?= $rpice; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    
    <!-- About -->
    <div class="aboutus py-5 section" id="aboutus">
      <div class="" style="padding: 40px">
        <div class="row">
          <div class="image col-md-6 " style="justify-content: center; display: flex; align-items: center;">
            <!-- Maps -->
            <div class="embed-responsive embed-responsive-16by9 py-5" style="height: 430px;" id="map">
                <iframe
                    class="embed-responsive-item"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6725.7722999649695!2d109.24907462298988!3d-7.435926777478545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655ea49d9f9885%3A0x62be0b6159700ec9!2sInstitut%20Teknologi%20Telkom%20Purwokerto!5e0!3m2!1sid!2sid!4v1724487570414!5m2!1sid!2sid" 
                    width="100%"
                    height="450"
                    frameborder="0"
                    style="border: 0; border-radius: 10px"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0"
                ></iframe>
            </div>
          </div>
          <div class="col-md-6 aboutus-text">
            <h2 class="px-4" style="font-weight: bold;">Tentang Kami</h2>
            <p class="mx-4 py-3" style="text-align: justify">
             Kami bertekad memberikan pengalaman menginap yang istimewa dengan menawarkan layanan berkualitas tinggi serta kenyamanan optimal. Hotel kami menyediakan beragam pilihan kamar yang dapat disesuaikan dengan kebutuhan, mulai dari kamar standar hingga suite eksekutif. Berada di lokasi strategis, Anda dapat dengan mudah menjangkau berbagai destinasi wisata dan pusat perbelanjaan ternama di Purwokerto.
            </p>
            <div class="card-body">
                <h6 class="card-title" style="margin: 0;">Alamat</h6>
                <p class="card-text" style="margin: 0;">Jl. DI Panjaitan No.128, Purwokerto Kidul, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah</p>
                <h6 class="card-title" style="margin: 0;">Nomor Telepon</h6>
                <p class="card-text" style="margin: 0;">089646813090</p>
                <h6 class="card-title" style="margin: 0;">Email</h6>
                <p class="card-text" style="margin: 0;">info@grandelphirahotel.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
