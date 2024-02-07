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
  <br>
  <body>
  <div class="container py-5">
    <div class="ros justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body bg-light">
            <div class="text-center">
              <h5>Login Aplikasi</h5>
            </div>
            <form action="" method="POST">
              <label class="form-label">Username</label>
              <input type="text" class="form-control" name="username" required>
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password" required>
              <div class="d-grid mt-2">
                <button class="btn btn-primary" type="submit" name="kirim">Masuk</button>
              </div>
            </form>
            <hr>
            <p>Belum punya akun? <a href="login.php">Login disini!</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="container mt-3">
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <img src="" class="card-img-top" title="" style="height:12rem;">
            <div class="card-footer text-center">
              <a href="">10 suka</a>
              <a href="">3 komentar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<?php
include 'footer.php';
?>