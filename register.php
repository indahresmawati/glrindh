<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Registrasi</title>
  </head>
  <body>
    <h1>Halaman Registrasi</h1>
    <form action="proses_register.php" method="post">
      <table>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email" name="email"></td>
        </tr>
        <tr>
          <td>Nama Lengkap</td>
          <td><input type="text" name="nama_lengkap"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="Register"></td>
        </tr>
      </table>
    </form>
  </body>
</html>