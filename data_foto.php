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
  <a href="tambahfoto.php">Tambah Data</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Judul Foto</th>
            <th scope="col">Deskripsi Foto</th>
            <th scope="col">Tanggal Unggah</th>
            <th scope="col">Lokasi File</th>
            <th scope="col">Kode Album</th>
            <th scope="col">Kode User</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <?php
		        $no = 1;
		        $data = mysqli_query($conn, "SELECT * FROM foto");
		        while($ft = mysqli_fetch_array($data)){
			    ?>
			    <tr>
             <th scope="row"><?php echo $no++ ?></th>
             <td scope="row"><?php echo $ft['judulfoto'] ?></td>
             <td scope="row"><?php echo $ft['deskripsifoto'] ?></td>
             <td scope="row"><?php echo $ft['tanggalunggah'] ?></td>
             <td scope="row"><img src="image/<?php echo $ft['lokasifile'] ?>" alt="" srcset=""></td>
             <td scope="row"><?php echo $ft['albumid'] ?></td>
             <td scope="row"><?php echo $ft['userid'] ?></td>
             <td>
                <a href="edit_foto.php?fotoid=<?php echo $ft['fotoid']; ?>">Edit</a>
                <a href="hapus_foto.php?fotoid=<?php echo $ft['fotoid']; ?>">Hapus</a>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
include 'footer.php';
?>
