<?php 
// SUPERGLOBAL
//VARIABEL milik php yang bisa kita gunakan
// bentuknya array assosiative
// $_GET
// $_POST
// $_SERVER
// $_GET["nama"]  ="SANDIKA";
// $_GET["email"]  ="SANDIKAgalih";
//  var_dump($_GET);
//  var_dump($_POST);



if(isset($_GET["nama"])){
    $nama= $_GET["nama"];
} else{
    $nama= "tidak diketahui";
}
$nama= $_GET ["nama"]
?>
<h1>Selamat datang, <?=$nama; ?></h1>
<ul>
    <li>
        <a href="kuliah_latihan1.php?nama=ALUCARD">ALUCARD</a>
    </li>
    <li>
        <a href="?nama=michel">michel</a>
    </li>
    <li>
        <a href="?nama=ADAN AHMAD ERLANGGA">ADAN AHMAD ERLANGGA</a>
    </li>
</ul>