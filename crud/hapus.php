<?php 
include 'koneksi.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM pesanan_awal WHERE id_pesanan = $id");

if ( $result ) {
    echo"
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'tampilkan.php';
        </script>
    ";
}else{  
    echo"
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'hapus.php';
        </script>
    ";
}



?>