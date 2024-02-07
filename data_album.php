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
    <br>
    <br>
    <br>
    <br>
  <div class="container">
  <a href="tambahalbum.php">Tambah Data</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Album</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Tanggal Dibuat</th>
            <th scope="col">Kode User</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <?php
		        $no = 1;
		        $sql = mysqli_query($conn, "SELECT * FROM album");
		        while($alb = mysqli_fetch_array($sql)){
			    ?>
			    <tr>
             <th scope="row"><?php echo $no++ ?></th>
             <td scope="row"><?php echo $alb['namaalbum'] ?></td>
             <td scope="row"><?php echo $alb['deskripsi'] ?></td>
             <td scope="row"><?php echo $alb['tanggaldibuat'] ?></td>
             <td scope="row"><?php echo $alb['userid'] ?></td>
             <td>
                <button type="submit" class="btn btn-primary"><a href="edit_album.php?albumid=<?php echo $alb['albumid']; ?>">Edit</a></button>
                <a href="hapus_album.php?albumid=<?php echo $alb['albumid']; ?>">Hapus</a>
             </td>
			    </tr>
			<?php 
		}
		?>
        </tbody>
      </table>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
<br>
<br>
<br>
<br>
<br>
<?php
include 'footer.php';
?>
