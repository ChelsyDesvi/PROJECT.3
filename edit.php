<?php
include("koneksi.php");
if(isset($_POST['update'])) {
    $judul=$_POST['judul'];
    $deskripsi=$_POST['deskripsi'];
    $tanggal_penulisan=$_POST['tanggal_penulisan'];
    $penulis=$_POST['penulis'];
    $foto=$_POST['foto'];
    $video=$_POST['video'];
$query="update kolaborasi set judul='$judul',deskripsi='$deskripsi',tanggal_penulisan='$tanggal_penulisan',penulis='$penulis',foto='$foto',video='$video' where id='$_GET[id]'";
$tambah =mysqli_query($koneksi,$query);
if($tambah){ 
    echo "<script>
                alert('catatan anda berhasil di edit!');
                window.location.href = 'kedua.php'; // Redirect ke halaman user.php setelah alert
              </script>";
} else {
    echo "<script>alert('gagal mengedit catatan anda.');</script>";
}
} 

?>
<?php
include 'koneksi.php';
$id=(int)$_GET['id'];
$query="select * from kolaborasi where id='$id'";
$eksekusi=mysqli_query($koneksi,$query); 
while($aa=mysqli_fetch_assoc($eksekusi)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            color:mediumslateblue;
            text-align: center;
            padding-top: 60px;
            padding-left: 60px;
            width: 10px;
            justify-content: space-between;
        }
        .tbl-biru{
        background: #3f72af;
        border-radius: 30px;
        margin: 40px;
        padding: 15px 30px 15px 30px;
        color: white;
        cursor: pointer;
        font-weight: bold;
        text-decoration: none;
        }

    </style>

</head>
<body>
    <div class="card">
        <form action="" method="post"> 
            <div style="margin-bottom : 30px;">
            <label for="">judul</label>
            <input type="text" value="<?=$aa['judul']?>" name="judul">
            </div> 
            <div style="margin-bottom : 30px;">
            <label for="">deskripsi</label>
            <textarea name="deskripsi" id="" cols="30"   rows="10"><?= $aa['deskripsi']?></textarea> 
            </div>
            <div style="margin-bottom : 30px;">
            <label for="">tanggal_penulisan</label>
            <input type="date" value="<?=$aa['tanggal_penulisan']?>" name="tanggal_penulisan">
            </div>
            <div style="margin-bottom : 30px;">
            <label for="">penulis</label>
            <input type="text" value="<?=$aa['penulis']?>" name="penulis"> 
            </div>
            <button type="submit" name="update" class="tbl-biru">update data </button>
        </form> 
    </div>
    <?php } ?>
</body> 
</html> 