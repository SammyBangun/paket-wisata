<?php
// Membuat koneksi ke database (bisa disesuaikan dengan kebutuhan)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wisata";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// $conn->close();
