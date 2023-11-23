<?php
include 'koneksi.php';
$id = $_POST['id_user'];
$Nama = $_POST['Nama'];
$Password = $_POST['Password'];
$Level = $_POST['Level'];

mysqli_query($koneksi, "insert into user values('$id','$Nama','$Password','$Level')");
header("location:hal_user.html");
?>