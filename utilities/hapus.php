<?php
include('../config/koneksi.php');


$id = $_GET['id'];


$sql = "DELETE FROM report WHERE id = '$id'";

if ($conn->query($sql) == TRUE) {
    header('Location: list.php?status=hapus');
    exit();
} else {
    header('Location: list.php?status=gagal');
}

$conn->close();
