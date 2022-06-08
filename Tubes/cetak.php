<?php
require_once __DIR__ . '/vendor/autoload.php';

require 'function.php';
$tubes = query("SELECT * FROM tugas_besar");


$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar mahasiswa/title>
</head>
<body>
        <h1>Daftar Mahasiswa</h1> 
        
        <table border="1" cellpadding="10" cellspacing="0">
        
          <tr>
            <th scope="col">No</th>
            <th scope="col">gambar</th>
            <th scope="col">nama</th>
            <th scope="col">youtube</th>
            <th scope="col">deskripsi</th>
            
          </tr>';
            $i=1;
          foreach ($tubes as $tbs) {
            $html .='<tr>
                <td>'.$i++.'</td>
                <td><img src="img/'.$tbs["gambar"].'" width="150"></td>
                <td>'.$tbs["nama"].'</td>
                <td>'.$tbs["youtube"].'</td>
                <td>'.$tbs["deskripsi"].'</td>
            </tr>';
          }



  $html .= '</table>   
</body>
</html>';


$mpdf->WriteHTML($html);
$mpdf->Output();
?>

