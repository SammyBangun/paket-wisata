<?php
include('../config/koneksi.php');

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama_pemesanan = $_POST['nama_pemesanan'];
    $no_hp = $_POST['no_hp'];
    $tgl_pesan = $_POST['tgl_pesan'];
    $waktu = $_POST['waktu'];
    $pelayanan = isset($_POST['pelayanan']) ? implode(',', $_POST['pelayanan']) : '';
    $jumlah_peserta = $_POST['jumlah_peserta'];
    $harga_paket = $_POST['harga_paket'];
    $jumlah_tagihan = $_POST['jumlah_tagihan'];

    $sql = "UPDATE report SET nama_pemesanan = '$nama_pemesanan', no_hp = '$no_hp', tgl_pesan = '$tgl_pesan', waktu = '$waktu', pelayanan = '$pelayanan', jumlah_peserta = '$jumlah_peserta', harga_paket = '$harga_paket', jumlah_tagihan = '$jumlah_tagihan' WHERE id = '$id'";

    // echo $sql;

    if ($conn->query($sql) == TRUE) {
        header('Location: list.php?status=edit');
        exit();
    } else {
        header('Location: list.php?status=gagal');
    }
} else
    die("Akses dilarang...");
$conn->close();
