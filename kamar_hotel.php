<?php
include "function.php";
if (isset($_GET["kamar_standar"])) {
    $detail_kamar = ambil_data("SELECT * FROM hotel WHERE jenis_kamar_hotel = 'Kamar Standar'")[0];
} else if (isset($_GET["kamar_deluxe"])) {
    $detail_kamar = ambil_data("SELECT * FROM hotel WHERE jenis_kamar_hotel = 'Kamar Deluxe'")[0];
} else if (isset($_GET["kamar_family"])) {
    $detail_kamar = ambil_data("SELECT * FROM hotel WHERE jenis_kamar_hotel = 'Kamar Family'")[0];
} else {
    header("Location: unknown.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kamar Hotel</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include('header.php'); ?>
    <div  style="padding: 40px;">
    <div class="row">
        <div class="col-md-12">
            <h2 style="font-weight: bold;">Detail Kamar Hotel</h2>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="embed-responsive embed-responsive-16by9">
                <?= $detail_kamar["video_hotel"]; ?>
            </div>
        </div>
    </div>

    <div class="row mt-4 text-center">
        <div class="col-md-4">
            <a href="zoom.php?image=<?= $detail_kamar["foto_hotel"]."1.jpg"; ?>">
                <img src="./src/images/<?= $detail_kamar["foto_hotel"]."1.jpg"; ?>" class="img-thumbnail" alt="Room 1">
            </a>
        </div>
        <div class="col-md-4">
            <a href="zoom.php?image=<?= $detail_kamar["foto_hotel"]."2.jpg"; ?>">
                <img src="./src/images/<?= $detail_kamar["foto_hotel"]."2.jpg"; ?>" class="img-thumbnail" alt="Room 2">
            </a>
        </div>
        <div class="col-md-4">
            <a href="zoom.php?image=<?= $detail_kamar["foto_hotel"]."3.jpg"; ?>">
                <img src="./src/images/<?= $detail_kamar["foto_hotel"]."3.jpg"; ?>" class="img-thumbnail" alt="Room 3">
            </a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <h3 style="font-weight: bold;">Deskripsi Kamar</h3>
            <p class="text-justify"><?= $detail_kamar["deskripsi"]; ?></p>
        </div>
    </div>
</div>

</body>
</html>
