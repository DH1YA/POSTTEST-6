<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pesanan</title>
  <link rel="stylesheet" href="hasil-pesanan.css">
</head>
<body>
  <div class="title">Data Pemesanan</div>
  <div class="tampilan">
   <div class="data-pesanan">
        <table>
          <tr>
            <td>Nama</td><td>: <?php echo $_POST['nama']; ?></td>
          </tr>
          <tr>
            <td>Alamat</td><td>: <?php echo $_POST['alamat']; ?></td>
          </tr>
          <tr><td>Nomor HP</td><td>: <?php echo $_POST['nomor']; ?></td>
          </tr>
          <tr>
            <td>Tanggal Pesanan</td><td>: <?php echo $_POST['tanggal']; ?></td>
          </tr>
          <tr>
            <td>Jumlah Pesanan</td><td>: <?php echo $_POST['jumlah']; ?></td>
          </tr>
          <tr>
            <td>Menu Pesanan</td><td>: <?php echo $_POST['menu']; ?><br><?php echo is_string($_POST['menu']); ?></td>
          </tr>
        </table>
    </div>
  </div>

  <div class="top-item">
      <div class="top-item-wrapper">
        <div class="top-item-row">
          <div class="top-item-detail">
            <h3>SELAMAT MENIKMATI</h3>
            <p>Semoga sesuai dengan selera anda</p>
          </div>
        </div>
      </div>
    </div>
</body>
</html>