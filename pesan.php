<?php
include "function.php";
    if (isset($_POST["tambah-pesan"])) {
    $tambah_pesan = tambah_pesan();
    $data_berhasil_pesan = ambil_data("SELECT MAX(id_pesanan) AS id_pesanan FROM pesanan")[0]["id_pesanan"];
    echo $tambah_pesan > 0 ? "<script>
        alert('Berhasil Menambah Pesanan!');
        location.href = 'hasil_pesan.php?id_pesan=$data_berhasil_pesan';
    </script>" : "<script>
        alert('Gagal Menambah Pesanan!');
        location.href = 'hasil_pesan.php?id_pesan=$data_berhasil_pesan';
    </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kamar - Hotel Booking</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .custom-navbar {
        background-color: #193028;
        }
     
    </style>    
</head>

<body>
    <?php include ('header.php'); ?>
    <div class="container my-3">
        <div class="card">
            <h4 class="card-header text-light custom-navbar text-center">Pesan Kamar</h4>
            <div class="card-body">
            <form action="" method="POST" id="form-pesan-kamar">
            <table class="table">
                <tr>
                    <td><label for="nama_pemesan">Nama Pemesan</label></td>
                    <td>:</td>
                    <td><input autocomplete="off" type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" required></td>
                </tr>
                <tr>
                    <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                    <td>:</td>
                    <td><input type="radio" value="Laki-laki" name="jenis_kelamin" id="Laki-laki" checked> <label
                            for="Laki-laki">Laki-laki</label>
                        <input type="radio" value="Perempuan" name="jenis_kelamin" id="Perempuan"> <label
                            for="Perempuan">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td><label for="nomor_identitas">Nomor Identitas</label></td>
                    <td>:</td>
                    <td><input type="number" class="form-control" id="nomor_identitas" name="nomor_identitas"></td>
                </tr>
                <tr>
                    <td><label for="jenis_kamar">Jenis Kamar</label></td>
                    <td>:</td>
                    <td><select class="form-control" id="jenis_kamar" name="jenis_kamar" required>
                            <option value="Standar" selected>-STANDAR-</option>
                            <option value="Deluxe">-DELUXE-</option>
                            <option value="Family">-FAMILY-</option>
                        </select></td>
                </tr>
                <tr>
                    <td><label for="harga">Harga</label></td>
                    <td>:</td>
                    <td><input value="Rp 500.000" type="text" class="form-control" id="harga" name="harga" disabled></td>
                </tr>
                <tr>
                    <td><label for="tgl_pesan">Tanggal Pesan</label></td>
                    <td>:</td>
                    <td><input type="date" class="form-control" id="tgl_pesan" name="tgl_pesan" required></td>
                </tr>
                <tr>
                    <td><label for="durasi_menginap">Durasi Menginap</label></td>
                    <td>:</td>
                    <td><input autocomplete="off" style="display: inline; width: 100px;" type="text" class="form-control" id="durasi_menginap" name="durasi_menginap" required> Hari <p class="discount" style="display: none;"> discount 10%</p> </td>
                </tr>
                <tr>
                    <td><label for="breakfast">Termasuk Breakfast</label></td>
                    <td>:</td>
                    <td>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="breakfast" name="breakfast"><label for="breakfast" class="form-check-label">Ya</label></div>
                    </td>
                </tr>
                <tr>
                    <td><label for="total_bayar">Total Bayar</label></td>
                    <td>:</td>
                    <td><input type="text" class="form-control" id="total_bayar" name="total_bayar" disabled></td>
                </tr>
            </table>
            <div class="d-flex">
                <span class="btn btn-custom text-light mr-3" id="btn-total-bayar">Hitung Total Bayar</span>
                <button type="submit" name="tambah-pesan" class="btn btn-custom text-light mx-3">Simpan</button>
                <a href="./produk.php" class="btn btn-secondary mx-3" id="btn-cancel">Cancel</a>

                <!-- <a href="./produk.php" class="btn btn-primary mx-3">Cancel</a> -->
            </div>
        </form>
            </div>
        </div>
    </div>
    <!-- Library Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        const $formPesanKamar = $('#form-pesan-kamar');
        const $nomorIdentitas = $('#nomor_identitas');
        const $durasiMenginap = $('#durasi_menginap');
        const $jenisKamar = $('#jenis_kamar');
        const $harga = $('#harga');
        const $btnTotalBayar = $('#btn-total-bayar');
        const $totalBayar = $('#total_bayar');

        const durasiMenginapInput = document.getElementById('durasi_menginap');
        const discountParagraph = document.querySelector('.discount');

        // Event listener untuk memantau perubahan nilai input
        durasiMenginapInput.addEventListener('input', function() {
            const durasi = parseInt(durasiMenginapInput.value);
            
            // Jika durasi lebih dari 3 hari, tampilkan paragraf discount
            if (durasi > 3) {
                discountParagraph.style.display = 'block';
            } else {
                discountParagraph.style.display = 'none';
            }
        });

        let harga2 = 500000;

        $nomorIdentitas.on('input', function() {
            if ($(this).val().length < 16) {
                this.setCustomValidity('isian salah..data harus 16 digit!');
                this.reportValidity();
                return false;
            } else {
                this.setCustomValidity('');
                this.reportValidity();
                return true;
            }
        });

        $durasiMenginap.on('input', function() {
            if (!parseInt($(this).val())) {
                this.setCustomValidity('harus isi angka!');
                this.reportValidity();
                return false;
            } else {
                this.setCustomValidity('');
                this.reportValidity();
                return true;
            }
        });

        $jenisKamar.on('input', function() {
            const value = $(this).val();
            if (value === 'Standar') {
                $harga.val(formatRupiah(500000));
                harga2 = 500000;
            } else if (value === 'Deluxe') {
                $harga.val(formatRupiah(750000));
                harga2 = 750000;
            } else if (value === 'Family') {
                $harga.val(formatRupiah(1000000));
                harga2 = 1000000;
            }
        });

        $btnTotalBayar.on('click', function() {
            const $breakfast = $('#breakfast');
            let dm = parseInt($durasiMenginap.val());

            if (isNaN(dm) || dm <= 0) {
                alert('Durasi menginap harus diisi dengan angka yang valid.');
                return;
            }

            let hargaAwal = harga2;
            let total = 0;
            total += hargaAwal * dm;
            
            console.log('Durasi Menginap:', dm);
            console.log('Harga Awal:', hargaAwal);

            if ($breakfast.prop('checked') === true) {
                total += (80000 * dm);
                // hargaAwal += 80000;
            }

            if (dm > 3) {
                // total += hargaAwal * dm;
                const diskon = total * 0.10;
                total -= diskon;
                console.log('Diskon diterapkan:', diskon);
            }

            console.log('Total Bayar:', total);
            $totalBayar.val(formatRupiah(Math.abs(total)));
        });


        function formatRupiah(angka) {
            let rupiah = '';
            let angkarev = angka.toString().split('').reverse().join('');
            for (let i = 0; i < angkarev.length; i++)
                if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
            return 'Rp ' + rupiah.split('', rupiah.length - 1).reverse().join('');
        }

        // Event listener untuk tombol Cancel
        const $btnCancel = $('#btn-cancel');
        $btnCancel.on('click', function(event) {
            event.preventDefault(); // Mencegah default action (navigasi ke halaman lain)
            $formPesanKamar[0].reset(); // Reset form
            discountParagraph.style.display = 'none'; // Sembunyikan paragraf discount jika terlihat
            $harga.val(formatRupiah(harga2)); // Set ulang nilai harga ke default sesuai dengan jenis kamar
            $totalBayar.val(''); // Kosongkan field total bayar
        });

    </script>
</body>

</html>