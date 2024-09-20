<?php
include('../config/koneksi.php');

if (isset($_POST['tambah'])) {
    $nama_pemesanan = $_POST['nama_pemesanan'];
    $no_hp = $_POST['no_hp'];
    $tgl_pesan = $_POST['tgl_pesan'];
    $waktu = $_POST['waktu'];
    $pelayanan = implode(',', $_POST['pelayanan']);
    $jumlah_peserta = $_POST['jumlah_peserta'];
    $harga_paket = $_POST['harga_paket'];
    $jumlah_tagihan = $_POST['jumlah_tagihan'];

    $sql = "INSERT INTO report (nama_pemesanan, no_hp, tgl_pesan, waktu, pelayanan, jumlah_peserta, harga_paket, jumlah_tagihan) VALUES ('$nama_pemesanan', '$no_hp', '$tgl_pesan', '$waktu', '$pelayanan', '$jumlah_peserta', '$harga_paket', '$jumlah_tagihan')";

    if ($conn->query($sql) === TRUE) {
        header('Location: list.php?status=sukses');
        exit();
    } else {
        header('Location: list.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
$conn->close();
