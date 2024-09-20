<?php
include('../config/link.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Paket Wisata</title>
    <link rel="stylesheet" href="../style/styling.css">

</head>

<body>
    <?php
    include('../config/jumbotron.php');
    include('../config/nav.php');
    ?>
    <div class="container card w-75 my-5 p-4">
        <h2>Form Pemesanan Paket Wisata</h2>
        <form class="row col-12 p-4" action="proses_input.php" method="post" onsubmit="hitungTotal()">
            <div class="form-group col-4 my-2">
                <label for="nama_pemesanan">Nama Pemesan:</label>
                <input type="text" class="form-control" id="namaPemesanan" name="nama_pemesanan" required>
            </div>
            <div class="form-group col-4 my-2">
                <label for="ho_hp">Nomor HP/Telp:</label>
                <input type="tel" class="form-control" id="nomorHP" name="no_hp" required>
            </div>
            <div class="form-group col-4 my-2">
                <label for="tgl-pesan">Tanggal Pesan:</label>
                <input type="date" class="form-control" id="tanggalPesan" name="tgl_pesan" required>
            </div>
            <div class="form-group col-4 my-2">
                <label>Pelayanan Paket Perjalanan:</label><br>
                <div class="form-check my-2">
                    <input type="checkbox" class="form-check-input" id="penginapan" name="pelayanan[]" value="1000000">
                    <label class="form-check-label" for="penginapan">Penginapan (Rp 1.000.000)</label>
                </div>
                <div class="form-check my-2">
                    <input type="checkbox" class="form-check-input" id="transportasi" name="pelayanan[]" value="1200000">
                    <label class="form-check-label" for="transportasi">Transportasi (Rp 1.200.000)</label>
                </div>
                <div class="form-check my-2">
                    <input type="checkbox" class="form-check-input" id="servisMakan" name="pelayanan[]" value="500000">
                    <label class="form-check-label" for="servisMakan">Servis/Makan (Rp 500.000)</label>
                </div>
            </div>
            <div class="form-group col-4 my-2">
                <label for="waktu">Waktu Pelaksanaan Perjalanan:</label>
                <input type="number" class="form-control" id="waktuPelaksanaan" name="waktu" min="0" required>
                <div class="form-text" id="basic-addon4">Note: Waktu Pelaksanaan Dalam Hari.</div>

            </div>
            <div class="form-group col-4 my-2">
                <label for="jumlah_peserta">Jumlah Peserta:</label>
                <input type="number" class="form-control" id="jumlahPeserta" name="jumlah_peserta" min="0" required>
                <div class="form-text" id="basic-addon4">Note: Jumlah Orang Yang Ikut.</div>
            </div>
            <div class="form-group col-4 my-2 ms-auto">
                <label for="harga_paket">Harga Paket Perjalanan:</label>
                <input type="text" class="form-control" id="hargaPaket" name="harga_paket" readonly>
            </div>
            <div class="form-group col-4 my-2">
                <label for="jumlah_tagihan">Jumlah Tagihan:</label>
                <input type="text" class="form-control" id="jumlahTagihan" name="jumlah_tagihan" readonly>
            </div>
            <div class="form-group col-12 mt-3 ">
                <button type="submit" name="tambah" class="btn btn-primary ">Simpan</button>
                <button type="button" class="btn btn-success" onclick="hitungTotal()">Hitung</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>
    <?php
    include('../config/footer.php');
    include('../functions/hitungTotal.php');
    ?>


</body>

</html>