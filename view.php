<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
</head>
<style>
    * {
        background-color: pink;
        font-size: 20px;
    }
    a.tbl-ungu {
    background:#DB7093;
    border-radius: 30px;
    margin: 40px;
    padding: 15px 70px 15px 70px;
    color: white;
    font-weight: bold;
    text-decoration: none;
    }
</style>
<body>
<?php
include 'koneksi.php';
$id=$_GET['id'];
$query="select * from kolaborasi where id='$id'";
$aa=mysqli_query($koneksi,$query);
$bb=mysqli_fetch_assoc($aa);
?> 
<h4><?= $bb['judul']?></h4>
<p><?= $bb['deskripsi']?></p> 
<p><?= $bb['tanggal_penulisan']?></p> 
<p><?= $bb['penulis']?></p> 


<a href="kedua.php" class="tbl-ungu">Tekan untuk kembali</a>
</body>
</html>
    