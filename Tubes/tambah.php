<?php 
session_start();

if (!isset($_SESSION["login"]) ) {
  header("location: loginadmin.php");
  exit;
}

require 'function.php';

// cek ketika tombol tambah di klik
if(isset($_POST['tambah'])) {

   if(tambah($_POST) > 0) {
       echo "<script>
            alert('data berhasil ditambahkan!');
            document.location.href=
            'halamanadmin.php';
       </script>";
   }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Data Mahasiswa</title>
  </head>
  <body>
  <body class="bg-secondary">
    <div class="row justify-content-center" style="padding-top:5rem;">
        <h1 class="text-center text-white fw-bold" >Tambah Data</h1>
        <form action="" method="POST" class="col-md-4" autocomplete="off" enctype="multipart/form-data" >
  <div class="mb-2 text-white" >
    <label for="nama" class="form-label">Nama</label>
    <input type="text"  name="nama" class="form-control" id="nama" required>
  </div>
  <div class="mb-2 text-white" >
    <label for="gambar" class="form-label">Gambar</label>
    <img src="" class="img-thumbnail" id="img-preview" width="120" style="display:none ;">
    <input type="file"  name="gambar" class="form-control" id="gambar" onchange="previewImage()">
  </div>
  <div class="mb-2 text-white" >
    <label for="youtube" class="form-label">youtube</label>
    <input type="link"  name="youtube" class="form-control" id="youtube" required>
  </div>
  <div class="mb-2 text-white">
  <label for="deskripsi" class="form-label">deskripsi</label>
  <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-primary" name="tambah">Tambah Data</button> - <a href="halamanadmin.php" class="btn btn-danger">kembali</a>
</form>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="js/gambar.js"></script>
  </body>
</html>