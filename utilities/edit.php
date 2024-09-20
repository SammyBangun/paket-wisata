<?php
include('../config/koneksi.php');
include('../config/link.php');
include('../config/jumbotron.php');
include('../config/nav.php');
$id = $_GET['id'];

$sql = "SELECT * FROM report WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $pemesanan = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pemesanan Paket Wisata</title>
    <link rel="stylesheet" href="../style/styling.css">
</head>

<body>
    <div class="container w-75 mt-5 mx-auto card p-4">
        <h2 class="text-center">Edit Pemesanan Paket Wisata</h2>

        <form action="update.php" class="row col-12 mt-4 p-4" method="post" onsubmit="hitungTotal()">
            <div class="form-group col-6 d-none">
                <label for="id">ID :</label>
                <input type="hidden" class="form-control" name="id" value="<?php echo $pemesanan['id']; ?>" hidden>
            </div>

            <div class="form-group col-4 my-2">
                <label for="nama_pemesanan">Nama Pemesan :</label>
                <input type="text" class="form-control" name="nama_pemesanan" value="<?php echo $pemesanan['nama_pemesanan']; ?>" required>
            </div>

            <div class="form-group col-4 my-2">
                <label for="no_hp">Nomor HP/Telp :</label>
                <input type="tel" class="form-control" name="no_hp" value="<?php echo $pemesanan['no_hp']; ?>" required>
            </div>

            <div class="form-group col-4 my-2">
                <label for="tgl_pesan">Tanggal Pesan :</label>
                <input type="date" class="form-control" name="tgl_pesan" value="<?php echo $pemesanan['tgl_pesan']; ?>" required>
            </div>

            <div class="form-group col-4 my-2">
                <label>Pelayanan Paket Perjalanan:</label><br>
                <div class="form-check my-2">
                    <input type="checkbox" class="form-check-input" name="pelayanan[]" value="1000000" <?php if (in_array(1000000, explode(',', $pemesanan['pelayanan']))) echo 'checked'; ?>>
                    <label class="form-check-label" for="penginapan">Penginapan (Rp 1.000.000)</label>
                </div>
                <div class="form-check my-2">
                    <input type="checkbox" class="form-check-input" name="pelayanan[]" value="1200000" <?php if (in_array(1200000, explode(',', $pemesanan['pelayanan']))) echo 'checked'; ?>>
                    <label class="form-check-label" for="transportasi">Transportasi (Rp 1.200.000)</label>
                </div>
                <div class="form-check my-2">
                    <input type="checkbox" class="form-check-input" name="pelayanan[]" value="500000" <?php if (in_array(500000, explode(',', $pemesanan['pelayanan']))) echo 'checked'; ?>>
                    <label class="form-check-label" for="servisMakan">Servis/Makan (Rp 500.000)</label>
                </div>
            </div>

            <div class="form-group col-4 my-2">
                <label for="waktu">Waktu Pelaksanaan Perjalanan:</label>
                <input type="number" class="form-control" id="waktuPelaksanaan" name="waktu" value="<?php echo $pemesanan['waktu']; ?>" min="0" required>
                <div class="form-text">Note: Waktu Pelaksanaan Dalam Hari.</div>
            </div>

            <div class="form-group col-4 my-2">
                <label for="jumlah_peserta">Jumlah Peserta:</label>
                <input type="number" class="form-control" id="jumlahPeserta" name="jumlah_peserta" value="<?php echo $pemesanan['jumlah_peserta']; ?>" min="0" required>
                <div class="form-text">Note: Jumlah Orang Yang Ikut.</div>
            </div>

            <div class="form-group col-4 my-2 ms-auto">
                <label for="harga_paket">Harga Paket Perjalanan:</label>
                <input type="text" class="form-control" id="hargaPaket" name="harga_paket" readonly>
            </div>
            <div class="form-group col-4 my-2">
                <label for="jumlah_tagihan">Jumlah Tagihan:</label>
                <input type="text" class="form-control" id="jumlahTagihan" name="jumlah_tagihan" readonly>
            </div>

            <div class="form-group col-12 mt-3">
                <button type="submit" class="btn btn-primary" value="edit" name="edit">Simpan</span></button>
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