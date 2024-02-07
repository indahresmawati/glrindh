<?php 
// koneksi database
ini_set('display_error',1);
error_reporting(E_ALL);
include 'koneksi.php';
session_start();

// menangkap data yang di kirim dari form
$judulfoto = $_POST['judulfoto'];
$deskripsifoto = $_POST['deskripsifoto'];
$albumid = $_POST['albumid'];
$tanggalunggah = date('Y-m-d');
$userid = $_POST['userid'];

$rand = rand();
$ekstensi = array('png','jpg','jpeg','gif');
$filename = $_FILES['lokasifile']['name'];
$ukuran = $_FILES['lokasifile']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
//if(!in_array($ext,$ekstensi)) {
    //header("location:data_foto.php");
//}else{
    
    //if($ukuran < 1044070){
        $xx = $rand.'_'.$filename;
        $upload = move_uploaded_file($_FILES['lokasifile']['tmp_name'], 'image/'.$rand.'_'.$filename);
        mysqli_query($conn, "INSERT INTO foto VALUES(NULL, '$judulfoto','$deskripsifoto','$tanggalunggah','$xx','$albumid','$userid')");
        header("location:data_foto.php");
        if (!$upload) {
            print_r($_FILES['lokasifile']['error']);
            header("location:data_foto.php");
        }
    //}else{
        //header("location:data_foto.php");
    //}
//} 
?>