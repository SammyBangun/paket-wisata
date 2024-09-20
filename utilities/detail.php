<?php
include('../config/koneksi.php');
// include('../config/link.php');

$id = isset($_POST['id']) ? (int)$_POST['id'] : 0; // Pastikan ID adalah integer

if ($id > 0) {
    $sql = "SELECT * FROM report WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Output HTML untuk konten modal
        echo "
        <table class='table table-striped'>
            <tr><th>Nama Pemesanan:</th><td>{$row['nama_pemesanan']}</td></tr>
            <tr><th>No Telepon:</th><td>{$row['no_hp']}</td></tr>
            <tr><th>Tanggal Pemesanan:</th><td>{$row['tgl_pesan']}</td></tr>
            <tr><th>Jumlah Hari:</th><td>{$row['waktu']}</td></tr>
            <tr><th>Jenis Pelayanan:</th><td>{$row['pelayanan']}</td></tr>
            <tr><th>Jumlah Peserta:</th><td>{$row['jumlah_peserta']}</td></tr>
            <tr><th>Harga Paket:</th><td>{$row['harga_paket']}</td></tr>
            <tr><th>Jumlah Tagihan:</th><td>{$row['jumlah_tagihan']}</td></tr>
        </table>
        ";
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak valid.";
}
