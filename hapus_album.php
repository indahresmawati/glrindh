<?php 
include 'koneksi.php';
$albumid = $_GET['albumid'];
mysqli_query($conn,"DELETE FROM album WHERE albumid='$albumid'");
header("location:data_album.php");
?>