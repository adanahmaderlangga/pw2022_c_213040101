<?php 
// untuk menghubungkan session
session_start();
 
if (!isset($_SESSION["login"]) ) {
  header("location: loginadmin.php");
  exit;
}

require 'function.php';

// pagination 
// konfigurasi

$jumlahdataperhalaman = 3;  
$jumlahdata = count(query("SELECT * FROM tugas_besar") );
$jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman);
$halamanaktive = (isset ($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awaldata = ($jumlahdataperhalaman * $halamanaktive) - $jumlahdataperhalaman;


$tubes = query("SELECT * FROM tugas_besar LIMIT $awaldata, $jumlahdataperhalaman");


// query sesuai dengan keyword pencarian ketika tombol cari di klik.
if (isset($_GET["cari"])) {
  $keyword= $_GET["keyword"];
  $query= "SELECT * FROM tugas_besar
            WHERE   
            gambar LIKE '%$keyword%' or
            nama LIKE '%$keyword%' or
            youtube LIKE '%$keyword%' or
            deskripsi LIKE '%$keyword%' 
            "; 
            

  $tubes = query ($query);
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

    <title>Halaman Admin</title>
  </head>
  <body>
    <div class="container">
      <!--css-->
      <style>
        @media print {
          .logout, .kembali, .tambah, .cari, .form-cari, {
            display: none;
          }
        }
        body {
          margin:80px;
          
          
        }
      </style>
      <!--css-->
        

        <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top " >
      <div class="container-fluid">
      <a href="tambah.php" class="btn btn-success tambah" >tambah data</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="halamanadmin.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-danger" href="cetak.php" target="_blank">cetak</a>
            </li>
          </ul>
          
          <form action="" method="get" class="d-flex navbar-nav me-auto mb-2 mb-lg-0">
            <input class="form-control me-2"  type="search" placeholder="Search" name="keyword" aria-label="Search" id
            ="keyword"/>
            <button class="btn btn-outline-success" type="submit" name="cari" id="tombol-cari">Search</button>
          </form>
          
          <div>
          <a class="btn btn-outline-danger" href="logout.php" class="logout text-end">log-out</a>
          </div>
        </div>
      </div>
    </nav>
    <!--akhir navbar-->

            
            
            

        

            
        <h1 class="text-black fw-bold text-center m-3 fst-italic" >Selamat datang di Halaman Admin</h1>
  <div id="container">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">gambar</th>
      <th scope="col">nama</th>
      <th scope="col">youtube</th>
      <th scope="col">deskripsi</th>
      
    </tr>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; foreach($tubes as $tbs) { ?>
              <tr>
                <th scope="row"><?= $i++; ?></th>
                <td>
	 	              	<img src="img/<?php echo $tbs['gambar'] ?>" class = "rounded-circle" height = "50px" >
                </td>
                <td><?php echo $tbs['nama'] ?></td>
                 <td> <?php echo $tbs['youtube']; ?> </td>
                 <td> <?php echo $tbs['deskripsi']; ?> </td>
                <td>
                  <a href="ubah.php?id=<?= $tbs["id"] ?>" class="btn btn-sm text-white bg-warning">Ubah</a>
                </td>
                <td><a href="hapus.php?id=<?= $tbs["id"] ?>" class="btn btn-sm text-white bg-danger" 
                  onclick="return confirm('apakah anda yaqin?');">Hapus</a></td>
              </tr>
              <?php } ?>
  </tbody>
</table>

  </div>

                  <!-- navigasi -->
                  
        <?php if($halamanaktive > 1) : ?>
          <a href="?halaman=<?= $halamanaktive - 1; ?>">&laquo;</a>
        <?php endif; ?>

        <?php for( $i=1 ; $i <= $jumlahhalaman; $i++) : ?>
          <?php if ($i == $halamanaktive): ?>
            <a href="?halaman=<?php echo $i; ?>" style="font-weight: bold ; color: red;"> <?php echo $i; ?> </a>
            <?php else :?>
              <a href="?halaman=<?php echo $i; ?>"> <?php echo $i; ?> </a>
              <?php endif; ?>
          <?php endfor; ?>

          <?php if($halamanaktive < $jumlahhalaman) : ?>
          <a href="?halaman=<?= $halamanaktive + 1; ?> "> &raquo;</a>
        <?php endif; ?>


          
          
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="js/script.js"></script>
  </body>
</html>