<?php 

include "function.php";
$daftar_pesanan = ambil_data("SELECT * FROM pesanan ORDER BY id_pesanan DESC");
$total_standar = ambil_data("SELECT * FROM pesanan WHERE tipe_kamar = 'Standar'");
$total_deluxe = ambil_data("SELECT * FROM pesanan WHERE tipe_kamar = 'Deluxe'");
$total_family = ambil_data("SELECT * FROM pesanan WHERE tipe_kamar = 'Family'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include "header.php"; ?>
<div class="container  my-3">
    <!-- menyimpan jumlah pesanan kamar untuk dipakai di js -->
    <input type="hidden" id="total-standar" value="<?= count($total_standar); ?>">
    <input type="hidden" id="total-deluxe" value="<?= count($total_deluxe); ?>">
    <input type="hidden" id="total-family" value="<?= count($total_family); ?>">

    <h4 class="text-center" style="font-weight: bold; padding-top: 40px">DAFTAR PESANAN</h4>
    <table class="table table-bordered my-4 ">
        <tr class="bg-info">
            <th>No</th>
            <th>Nama Pemesan</th>
            <th>Nomor Identitas</th>
            <th>Jenis Kelamin</th>
            <th>Tipe Kamar</th>
            <th>Durasi Penginapan</th>
            <th>Discount</th>
            <th>Total Bayar</th>
        </tr>
        <?php
        $i = 1;
        foreach ($daftar_pesanan as $dp) { ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $dp["nama_pemesan"]; ?></td>
                <td><?= $dp["nomor_identitas"]; ?></td>
                <td><?= $dp["jenis_kelamin"]; ?></td>
                <td><?= $dp["tipe_kamar"]; ?></td>
                <td><?= $dp["durasi_menginap"] ?> Hari</td>
                <td><?= $dp["durasi_menginap"] <= 3 ? "0%" : "10%"; ?></td>
                <td><?= format_rupiah($dp["total_bayar"]); ?></td>
            </tr>
        <?php $i++; } ?>
    </table>
    <canvas id="myChart" style="max-width: 700px; margin: 0 auto;"></canvas>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
        // mengambil nilai jumlah pesanan tiap kamar
        const totalStandar = parseInt(document.querySelector('#total-standar').value);
        const totalDeluxe = parseInt(document.querySelector('#total-deluxe').value);
        const totalFamily = parseInt(document.querySelector('#total-family').value);

        var xValues = ["Standar", "Deluxe", "Family"];
        var yValues = [totalStandar, totalDeluxe, totalFamily];
        var barColors = ["red", "green", "blue"];

        new Chart("myChart", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Grafik Daftar Pesanan"
                }
            }
            });
    </script>
</body>

</html>