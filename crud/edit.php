<?php
include 'koneksi.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM pesanan_awal WHERE id_pesanan=$id");

$pesanan_awal = [];

while ($row = mysqli_fetch_assoc($result)) {
    $pesanan_awal[] = $row;
}

$pesanan = $pesanan_awal[0];




if (isset($_POST["tambah"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $tgl_pesanan = htmlspecialchars($_POST["tanggal"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $jumlah = htmlspecialchars($_POST["jumlah"]);
    $kontak = htmlspecialchars($_POST["nomor"]);
    $menu = htmlspecialchars($_POST["menu"]);

    $sql = "UPDATE pesanan_awal SET
            nama = '$nama',
            tgl_pesanan = '$tgl_pesanan',
            alamat = '$alamat',
            jumlah = '$jumlah'
            kontak = '$kontak',
            menu = '$menu',
            WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ( $result ) {
        echo"
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'tampilkan.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data gagal diubah');
                document.location.href = 'edit.php';
            </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="crud-style.css">
</head>
<body>
     <!-- formulir pemesann -->
  <div class="formulir-pesan">
    <div class="title">Edit Pemesanan</div>

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
</body>
</html>