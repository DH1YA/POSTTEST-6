<?php
require 'koneksi.php';

if (isset($_POST["tambah"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $tgl_pesanan = htmlspecialchars($_POST["tanggal"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $jumlah = htmlspecialchars($_POST["jumlah"]);
    $kontak = htmlspecialchars($_POST["nomor"]);
    $menu = htmlspecialchars($_POST["menu"]);

    // $sql = "INSERT INTO pesanan_awal VALUES ('','$nama', '$tgl_pesanan', '$alamat', '$jumlah','$kontak', '$menu')";
    // $result = mysqli_query($conn, $sql);
    mysqli_query($conn,"INSERT INTO `pesanan_awal`(`id_pesanan`, `nama`, `tgl_pesanan`, `alamat`, `jumlah`, `kontak`, `menu`) 
    VALUES ('','$nama','$tgl_pesanan','$alamat','$jumlah','$kontak','$menu')") or die(mysqli_error($conn));

    echo"<div align='center'><h5> menambahkan data </h5></div>";
    echo"<meta http-equiv='refresh' content='1;url=http://localhost/posttest5/crud/tampilkan.php'>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="crud-style.css">
</head>
<body>
  <?php include "crud-header.php"; ?>
  

  <!-- formulir pemesann -->
  <div class="formulir-pesan">
    <div class="title">Formulir Pemesanan</div>

    <form action="" method="post">
      <div class="data-pesanan">
        <div class="input-box">
          <span class="data">Nama :</span>
          <input type="text" name="nama" placeholder="Masukkan nama anda" required>
        </div>

        <div class="input-box">
          <span class="data">Tanggal Pesanan :</span>
          <input type="date" name="tanggal">
        </div>

        <div class="input-box">
          <span class="data">Nomor HP :</span>
          <input type="number" name="nomor" placeholder="Masukkan nomor telepon" min=0 required>
        </div>

        <div class="input-box">
          <span class="data">Alamat :</span> <br>
          <textarea name="alamat"></textarea>
        </div>

        <div class="input-box">
          <span class="data">Jumlah Pesanan :</span>
          <input type="number" name="jumlah" placeholder="Masukkan jumlah pesanan" min=1 required>
        </div>

        <div class="input-box">
          <span class="data">Menu Pesanan :</span>
          <input class="pilih-menu" type="radio" name="menu" value="menu1">Menu1
          <input class="pilih-menu" type="radio" name="menu" value="menu2">Menu2
          <input class="pilih-menu" type="radio" name="menu" value="menu3">Menu3
        </div>
      </div>

        <button class="button" type="submit" name="tambah">tambah</button>

    </form>
  </div>
  <!-- akhir formulir pemesanan -->


  <?php include "crud-footer.php"; ?>
</body>
</html>

