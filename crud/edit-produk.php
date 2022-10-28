<?php
include 'koneksi.php';
$id = $_GET['update'];

$result = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk=$id");

$produk = [];

while ($row = mysqli_fetch_assoc($result)) {
    $produk[] = $row;
}

$produk = $produk[0];




if(isset($_POST['add_product'])){
    $nama = $_POST['nama'];
    $nama = filter_var($nama, FILTER_SANITIZE_STRING);

    $d = date("Y-m-d H:i:s");

    $gambar = $_FILES['gambar']['name'];
    $gambar = filter_var($gambar, FILTER_SANITIZE_STRING);
    $x = explode('.', $gambar);
    $extensi = strtolower(end($x));
    $gambar_baru = "$nama.$extensi";
    $tmp = $_FILES['gambar']['tmp_name'];
    $image_folder = 'upload_img/'.$gambar_baru;

    $sql = "UPDATE produk SET
            nama_produk = '$nama',
            waktu = '$d',
            foto = '$gambar_baru'
            WHERE id_produk = $id";

    $result = mysqli_query($conn, $sql);

    if ( $result && move_uploaded_file($tmp, $image_folder)) {
        echo"
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'produk.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data gagal diubah');
                document.location.href = 'produk.php';
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
  <title>Document</title>
  <link rel="stylesheet" href="crud-style.css">
</head>
<body>
  <section class="add-products">

    <form action="" method="POST" enctype="multipart/form-data">
      <h3>Tambah produk</h3>
      <input type="text" required placeholder="masukkan nama produk" name="nama" maxlength="100" class="box">
      <input type="file" name="gambar" class="box" accept="image/jpg, image/jpeg, image/png, image/webp" >
      <input type="submit" value="add product" name="add_product" class="btn">
    </form>

  </section>
</body>
</html>