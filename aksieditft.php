<?php 
include 'koneksi.php';
$fotoid = $_POST['fotoid'];
$judulfoto = $_POST['judulfoto'];
$deskripsifoto = $_POST['deskripsifoto'];
$tanggalunggah = $_POST['tanggalunggah'];
$albumid = $_POST['albumid'];
$userid = $_POST['userid'];
mysqli_query($conn,"UPDATE foto SET judulfoto='$judulfoto', deskripsifoto='$deskripsifoto', tanggalunggah='$tanggalunggah', lokasifile='$lokasifile', albumid='$albumid', userid='$userid' WHERE fotoid='$fotoid'");
header("location:data_foto.php");
?>