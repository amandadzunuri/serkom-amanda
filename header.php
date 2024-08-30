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

        .custom-navbar {
        background-color: #193028;
        }

        body {
        font-family: 'Inter', sans-serif;
        }

        .btn-custom {
        background-color: #cfa417;
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
</body>
</html>
