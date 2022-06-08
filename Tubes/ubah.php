<?php 
session_start();

if (!isset($_SESSION["login"]) ) {
    header("location: loginadmin.php");
    exit;
  }
require 'function.php';

// query mahasiswa berdasarkan id
$id = $_GET["id"];
$tbs = query (" SELECT * FROM tugas_besar WHERE id =$id")[0];

// cek ketika tombol Ubah di klik
if(isset($_POST['ubah'])) {

   if(ubah($_POST) > 0) {
       echo "<script>
            alert('data berhasil diubah!');
            document.location.href =
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

    <title>Ubah Data Mahasiswa</title>
  </head>
  <body>
    <div class="container">
        <h1>Form Ubah Data Mahasiswa</h1>

        

        <div class="row">
            <div class="col"> 
                <form action="" method="POST" autocomplete="off">

                        <input type ="hidden" name="id"  value="<?php echo $tbs["id"];  ?>">

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <img src="" class="img-thumbnail" id="img-preview" width="120" style="display:none ;">
                        <input type="text" class="form-control" id="gambar" name="gambar" required value="<?php echo $tbs["gambar"];  ?>">
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required value="<?php echo $tbs["nama"];  ?>">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">deskripsi</label>
                        <input type="link" class="form-control" id="deskripsi" name="deskripsi"  required value="<?php echo $tbs["deskripsi"];  ?>">
                    </div>
                    <div class="mb-3">
                        <label for="youtube" class="form-label">youtube</label>
                        <input type="link" class="form-control" id="youtube" name="youtube" required value="<?php echo $tbs["youtube"];  ?>">
                    </div>




                    <button type="submit" class="btn btn-primary" name="ubah">Ubah Data</button> / <a href="halamanadmin.php" class="btn btn-danger">Kembali ke halaman admin</a>

                </form>

            </div>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>