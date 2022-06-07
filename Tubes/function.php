<?php

function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('KONEKSI GAGAL!'); 

    return $conn;
}

function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    $conn = koneksi();

    // jika user tidak memilih gambar
    if($_FILES["gambar"]["error"] === 4 ) {
        $gambar='profil2.jpg';
    } else {
         // jalankan fungsi upload gambar
        $gambar= upload();
        //cek jika upload gagal
        if(!$gambar) {
            return false;
        }
    }
    
    $nama = htmlspecialchars($data['nama']);
    $youtube = ($data['youtube']);
    $deskripsi = htmlspecialchars ($data['deskripsi']);
    
    // $gambar = ($data['gambar']);
  
    $query = "INSERT INTO tugas_besar VALUES (null, '$gambar', '$nama', '$youtube','$deskripsi')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi ();

    mysqli_query($conn , "DELETE FROM tugas_besar 
    WHERE id=$id") or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}   

function ubah($data) {

    

    $id =$data["id"];

    $gambar =    ($data['gambar']);
    $nama =      ($data['nama']);
    $youtube   = ($data['youtube']);
    $deskripsi = ($data['deskripsi']);
    
    
    

    $query = "UPDATE tugas_besar SET  
          gambar='$gambar',
          nama='$nama',
          youtube='$youtube',
          deskripsi='$deskripsi'
          
        WHERE id=$id 
          ";

    $conn = koneksi();
    mysqli_query($conn, $query) or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);


} 
function cari ($keyword) {
    $query = "SELECT * FROM tugas_besar
                WHERE   
                gambar LIKE '%$keyword%' or
                nama LIKE '%$keyword%' or
                youtube LIKE '%$keyword%' or
                deskripsi LIKE '%$keyword%' 
                ";
                return query($query);
}


function registrasi($data) {
    $conn =koneksi();

    $username= strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);

    // cek username sudah ada atau belum
    $result= mysqli_query($conn ,"SELECT username FROM user WHERE 
        username= '$username'");

    if(mysqli_fetch_assoc($result) ) {
        echo "<script> 
        alert ('username sudah terdaftar!');
    </script>";
        return false;
    }


    if ($password !== $password2) {
        echo "<script> 
            alert ('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }
   
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan username ke database
    mysqli_query($conn,"INSERT INTO user VALUES('', '$username',
    '$password')");
    
    return mysqli_affected_rows($conn);

}

function upload() {
    // siapkan data gambar
    $filename = $_FILES["gambar"]["name"];
    $filetmpname =$_FILES["gambar"]["tmp_name"];
    $filesize =$_FILES["gambar"]["size"];
    $filetype = pathinfo($filename , PATHINFO_EXTENSION);
    $allowedtype =["jpg", "jpeg", "png"];

    // cek apakah file yang di upload bukan gambar 
    if(!in_array($filetype, $allowedtype) ) {
        echo "<script>
            alert('ngabload naon ari maneh ? da lain gambar eta mah!');
        </script>";
        return false;
    }

    // cek apakah gambar terlalu besar
    if($filesize > 1000000) {
        echo "<script>
        alert('gambarnya kegedean bro!');
    </script>";
        return false;
    }


    // lolos pengecekan , siap untuk upload
    $newfilename = uniqid() . $filename;
    move_uploaded_file($filetmpname, 'img/' . $newfilename);
    return $newfilename;
}

