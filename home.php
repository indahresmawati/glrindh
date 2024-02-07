<?php
include 'header.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>galeri foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <br><br><br>
    <?php
    session_start();
    if(!isset($_SESSION['userid'])){
    ?>
  <a href="tambahfoto.php">Tambah Data</a>
    <?php
    }else{
    ?>
    <p>Selamat Datang <b><?=$_SESSION['namalengkap']?></b></p>
    <?php
    }
    ?>
    <table class="table">
        <br>
    <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="/image/senja.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">16 min</span>
        <h4>Jane Doe</h4><br>
        <hr class="w3-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div>  
  <table class="table">
    <br>
    <div class="container" type="card" background-color="white" style="border:round; margin:auto;">
      <img src="/image/senja.jpg" alt="senja" class="left;circle;margin:right;" style="width:60px">
      <span style="float:right; opacity:0,5;">20 min</span>
      <h4>Senja</h4>
      <hr class="clear">
      <p>ini adalah senjaku.</p>
      <button type="button" style="button theme-d1 margin:bottom;"><i class="material-icons">favorite</i>
</button>
      <button type="button" class="button theme-d2 margin-bottom"><i class="comment"> Comment</i></button>
    </div>
  </table>
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<?php
include 'footer.php';
?>

