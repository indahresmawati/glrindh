<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$namaalbum = $_POST['namaalbum'];
$deskripsi = $_POST['deskripsi'];
$tanggaldibuat = $_POST['tanggaldibuat'];
$userid = $_POST['userid'];
 
// menginput data ke database
mysqli_query($conn, "INSERT INTO album VALUES('','$namaalbum','$deskripsi','$tanggaldibuat','$userid')");
 
// mengalihkan halaman kembali ke index.php
header("location:data_album.php");
 
?>