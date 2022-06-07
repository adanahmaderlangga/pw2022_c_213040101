<?php 
require 'functions.php';
$mahasiswa = query('SELECT * FROM Mahasiswa');


// query sesuai dengan keyword pencarian ketika tombol cari di klik.
if (isset($_GET["cari"])) {
  $keyword= $_GET["keyword"];
  $query= "SELECT * FROM mahasiswa
          WHERE   
            nama LIKE '%$keyword%' or
            nama LIKE '%$keyword%'
          ";

  $mahasiswa = query ($query);
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

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    <div class="container">
        <h1>Daftar Mahasiswa</h1>

        <a href="tambah.php" class="btn btn-primary">Tambah Data Mahasiswa</a>
        <form action="" method="get" class="mt-4">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="keyword" placeholder="masukan keyword pencarian...." autocomplete="off">
            <button class= "btn btn-primary" type="submit" name="cari">Cari!</button>
            
          </div>
        </form>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">link</th>
      <th scope="col">gambar</th>
      <th scope="col">aksi</th>
    </tr>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; foreach($mahasiswa as $mhs) { ?>
              <tr>
                <th scope="row"><?= $i++; ?></th>
                <td>
	 	              	<img src="img/<?php echo $mhs['gambar'] ?>" class = "rounded-circle" height = "50px" >
                </td>
                <td><?php echo $mhs['nama'] ?></td>
                <td><?php echo $mhs['npm'] ?></td>
                <td><?php echo $mhs['email'] ?></td>
                <td><?php echo $mhs['jurusan'] ?></td>
                <td>
                  <a href="ubah.php?id=<?= $mhs["id"] ?>" class="btn btn-sm text-white bg-warning">Ubah</a>
                  <a href="hapus.php?id=<?= $mhs["id"] ?>" class="btn btn-sm text-white bg-danger" 
                  onclick="return confirm('apakah anda yaqin?');">Hapus</a>
                </td>
              </tr>
              <?php } ?>
  </tbody>
</table>
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