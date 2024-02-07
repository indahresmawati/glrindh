<?php 
include 'koneksi.php';
$fotoid = $_GET['fotoid'];
mysqli_query($conn,"DELETE FROM foto WHERE fotoid='$fotoid'");
header("location:data_foto.php");
?>