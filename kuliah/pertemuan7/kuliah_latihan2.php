<?php 
$mahasiswa = [
    [
        "#" => "1",
        "nama" => "Adan Ahmad Erlangga", 
        "npm" => "213040101", 
        "jurusan" => "Teknik Informatika",
        "email" => "adan.213040101@mail.unpas.ac.id",
        "gambar" => "Angga.JPG"
    ],
    [
        "#" => "2",
        "nama" => "hakim", 
        "npm" => "213040127", 
        "email" => "hakim221@gmail.com", 
        "jurusan" => "mahasiswa marketing",
        "gambar" => "Mala.JPG"
    ],
    [
        "#" => "3",
        "nama" => "yusuf", 
        "npm" => "213040108",
        "email" => "ariana123@gmail.com",
        "jurusan" =>  "mahasiswa ekonomi",
        "gambar" => "Mae.JPG"
    ],
    [
        "#" => "4",
        "nama" => "ilham", 
        "npm" => "213040109", 
        "email" =>   "saud789@gmail.com",
        "jurusan" => "mahasiswa sastra",
        "gambar" => "Kurip.JPG"
    ],
];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>

    <div class="container">
        <h1>Daftar Mahasiswa</h1>
                <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach( $mahasiswa as $mhs ) { ?>
            <tr>
            <th scope="row" class="align-middle"><?php echo$mhs["#"];?></th>
            <td class="align-middle">
                <img src= height="50" class="rounded-circle">
            </td>"img/<?= $mhs["gambar"]; ?>"
            <td class="align-middle"><?php echo$mhs["nama"]?></td>
            <td class="align-middle">
                <a href="" class="btn badge bg-warning">edit</a>
                <a href="" class="btn badge bg-danger">delete</a>
                <a href="kuliah_latihan3.php?
                nama=<?php echo $mhs["nama"]?>&
                npm=<?php echo $mhs["npm"]?>&
                email=<?php echo $mhs["email"]?>&
                jurusan=<?php echo $mhs["jurusan"]?>&
                gambar=<?php echo $mhs["gambar"]?> >" class="btn badge bg-info">detail</a>
            </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>