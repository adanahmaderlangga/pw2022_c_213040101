<?php 
session_start();
require 'function.php';


// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
        $id= $_COOKIE['id'];
        $key= $_COOKIE['key'];

        //ambil username berdasarkan id
        $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('KONEKSI GAGAL!');
        $result = mysqli_query($conn, "SELECT username FROM user WHERE id=$id");
        $row = mysqli_fetch_assoc($result);

        // cek cookie dan username
        if( $key === hash('sha256', $row['username']) ) {
          $_SESSION['login'] = true;
        }
    }

        if (isset($_SESSION["login"]) ) {
            header("location: halamanadmin.php");
            exit;
}



if (isset($_POST["login"])) {
      
  $username= $_POST["username"];
  $password= $_POST["password"];

  $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('KONEKSI GAGAL!'); 
  $result = mysqli_query( $conn, "SELECT * FROM user WHERE username= '$username'") ;

  // cek username
  if (mysqli_num_rows($result) === 1) {

    //cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"]) ) {
      // set session 
      $_SESSION["login"] = true;

      // cek remember me
      if(isset($_POST['remember']) ) {
        // buat cookie
        setcookie('id', $row['id'], time()+60);
        setcookie('key', hash('sha256', $row['username']), time()+60);
      }
      header("Location: halamanadmin.php");
      exit;
    }
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

    <title>login admin</title>

    <?php if (isset($error)) : ?>
        <p style="color:red ; font-style:italic;">username/ password salah</p>
      <?php endif ; ?>

  </head>
  <body class="bg-secondary">
    <div class="row justify-content-center" style="padding-top:8rem;">
        <h1 class="text-center text-white fw-bold" >Login Admin</h1>
        <form action="" method="post" class="col-md-4" >
  <div class="mb-3 text-white">
    <label for="username" class="form-label">username</label>
    <input type="text"  name ="username" class="form-control" id="username" aria-describedby="username" required>
    <div id="username" class="form-text">Stay with me</div>
  </div>
  <div class="mb-3 text-white" >
    <label for="password" class="form-label">Password</label>
    <input type="password"  name="password" class="form-control" id="password" required>
  </div>
    <li>
      <input type="checkbox" name="remember" id="remember">
      <label for="remember">remember me</label>
      
    </li>
  <button type="submit" name="login" class="btn btn-primary ">Login</button>
  <a href="registrasi.php" class="btn btn-success">Buat Akun Baru</a>
  <br>
  <a href="halamanawal.php" class="text-white" fw-bold>kembali ke Halaman awal</a>
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
  </body>
</html>