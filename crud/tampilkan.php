<?php
include 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM pesanan_awal");

$pesanan_awal = [];

while ($row = mysqli_fetch_assoc($result)) {
    $pesanan_awal[] = $row;
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
  <style>
    .tabel-pesanan {
      margin:90px auto;
      height:40rem;
    }

    table {
      font-size:20px;
      border-collapse: collapse;
      width: 100%;
      border:2px solid;
    }
    
    th {
    background-color: #04AA6D;
    color: white;
    height:70px;
     }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {background-color: #f2f2f2;}
    tr:hover {background-color: coral;}
</style>
</head>
<body>
  <?php include "crud-header.php"; ?>
  <!-- table -->
  <div class="tabel-pesanan">
  <table border=1px>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>TANGGAL</th>
            <th>ALAMAT</th>
            <th>JUMLAH</th>
            <th>KONTAK</th>
            <th>MENU</th>
            <th>UTAK ATIK</th>
    
        </tr>
        <?php $i = 1; foreach ($pesanan_awal as $pesanan):?>
        <tr>
            <td><?php echo $i ;?></td>
            <td><?php echo $pesanan["nama"]; ?></td>
            <td><?php echo $pesanan["tgl_pesanan"] ;?></td>
            <td><?php echo $pesanan["alamat"] ;?></td>
            <td><?php echo $pesanan["jumlah"] ;?></td>
            <td><?php echo $pesanan["kontak"] ;?></td>
            <td><?php echo $pesanan["menu"] ;?></td>
            <td><a href="edit.php?id=<?php echo $pesanan["id_pesanan"]; ?>">Edit</a> 
            | <a href="hapus.php?id=<?php echo $pesanan["id_pesanan"]; ?>" onclick = "return confirm('And yakin ingin menghapus data ini ?')">Hapus</a></td>
        </tr>
        <?php $i++; endforeach;?>
    </table>
  </div>
  <!-- table -->
  <?php include "crud-footer.php"; ?>
</body>
</html>