<?php 
require 'function.php';

if (isset ($_POST["register"]) ) {

    if (registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');    
              </script>";
              header("Location: loginadmin.php");
    } else {
        echo mysqli_error($conn);
    }
}

?>
<html lang="en">
<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>
<body class="bg-info">
    <div class="row justify-content-center" style="padding-top:8rem;">
        <h1 class="text-center text-black fw-bold" >Buat akun Baru</h1>
        <form action="" method="post" class="col-md-4" >
  <div class="mb-3 text-black">
    <label for="username" class="form-label">username</label>
    <input type="text"  name ="username" class="form-control" id="username" aria-describedby="username" required>
  </div>
  <div class="mb-3 text-black" >
    <label for="password" class="form-label">Password</label>
    <input type="password"  name="password" class="form-control" id="password">
  </div>
  <div class="mb-3 text-black" >
    <label for="password2" class="form-label">Konfirmasi Password</label>
    <input type="password"  name="password2" class="form-control" id="password2">
  </div>
  <button type="submit" name="register" class="btn btn-primary">registrasi</button>
  <a href="loginadmin.php" class="btn btn-danger">Sudah Punya Akun</a>
</form>
</body>
</html>