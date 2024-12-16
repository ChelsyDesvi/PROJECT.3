<?php
include("koneksi.php");
if(isset($_POST['tambah'])) {
    $judul=$_POST['judul'];
    $deskripsi=$_POST['deskripsi'];
    $tanggal_penulisan=$_POST['tanggal_penulisan'];
    $penulis=$_POST['penulis'];
$query ="insert into kolaborasi (judul,deskripsi,tanggal_penulisan,penulis) VALUES ('$judul','$deskripsi','$tanggal_penulisan','$penulis')";
$tambah = mysqli_query($koneksi,$query);
if($tambah){
    echo "<script>
                alert('data berhasil ditambahkann!');
                window.location.href = 'kedua.php'; // Redirect ke halaman user.php setelah alert
              </script>";
} else {
    echo "<script>alert('gagal menambahkann data.');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
    <style>
        .tbl-pink {
        background: #fc5185;
        border-radius: 30px;
        margin: 40px;
        padding: 15px 30px 15px 30px;
        color: white;
        cursor: pointer;
        font-weight: bold;
        text-decoration: none;
        }
        .card {
            color:mediumslateblue;
            text-align: center;
            padding-top: 60px;
            padding-left: 60px;
            width: 10px;
            justify-content: space-between;
        }
    </style>
    
</head>
<body>
    <div class="card">
        <form action="" method="post"> 
            <div style="margin-bottom : 30px;">
            <label for="">judul</label>
            <input type="text" name="judul">
            </div>
            <div style="margin-bottom : 30px;">
            <label for="">deskripsi</label>
            <textarea name="deskripsi" id="" cols="30" rows="10"></textarea>
            </div>
            <div style="margin-bottom : 30px;">
            <label for="">tanggal_penulisan</label>
            <input type="date" name="tanggal_penulisan">
            </div>
            <div style="margin-bottom : 30px;">
            <label for="">penulis</label>
            <input type="text" name="penulis"> 
            </div>
            <button type="submit" name="tambah" class="tbl-pink">Tambahkan data</button>
        </form> 
        
    </div>
</body> 
</html>