<?php
include 'header.php';
?>

<br>
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
    <div class="container">
    <table class="table">
    <h5 class="card-title">Tambah Foto</h5>
	<form method="post" action="aksitambahft.php" enctype="multipart/form-data">
    <a href="data_foto.php">Kembali</a>
    <div class="col-md-6" style="position:relative;">
    <div class="card mb-3">
      <div class="card-body">
      <input type="hidden" class="form-control" id="fotoid" name="fotoid">        
        <div class="mb-3">
            <label for="" class="form-label">Judul Foto</label>
            <input type="text" class="form-control" id="judulfoto" name="judulfoto">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Deskripsi Foto</label>
            <input type="text" class="form-control" id="deskripsifoto" name="deskripsifoto">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tanggal Unggah</label>
            <input type="date" class="form-control" id="tanggalunggah" name="tanggalunggah">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Lokasi File</label>
            <input type="file" class="form-control" id="lokasifile" name="lokasifile">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Kode Album</label>
            <input type="number" class="form-control" id="albumid" name="albumid">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Kode User</label>
            <input type="number" class="form-control" id="userid" name="userid">
        </div>
    
        <button type="submit" class="btn btn-primary">Tambah</button>
		</table>
        </div>
        </div>
        </div>
	</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
<br>

<?php
include 'footer.php';
?>