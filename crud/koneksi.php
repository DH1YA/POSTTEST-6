<?php 
    $conn = mysqli_connect("localhost", "root", "", "pesanan_db");

    if (!$conn) {
        die("Gagal terhubung ke database" . mysqli_connect_error());
    }
?>