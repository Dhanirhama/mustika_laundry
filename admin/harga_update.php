<!--  digunakan untuk mengarahkan data update harga laundry-->
<?php
session_start();
include '../koneksi.php'; 
$harga = $_POST['harga'];
mysqli_query($koneksi,"update harga set harga_per_kilo='$harga'");
header("location:harga.php?pesan=berhasil");
?>
