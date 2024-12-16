<?php
include('koneksi.php');
if (isset($_GET["id"])) {
    $id=$_GET["id"];
    $query="delete from kolaborasi where id='$id'";
    $hapus=mysqli_query($koneksi,$query);
    if ($hapus) {
        echo "<script>
                alert('catatan anda berhasil dihapus!');
                window.location.href = 'kedua.php'; // Redirect ke halaman user.php setelah alert
              </script>";
    } else {
        echo "<script>
                alert('Penghapusan gagal: " . mysqli_error($koneksi) . "');
              </script>";
    }

}  
?>