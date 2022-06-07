<?php 
require '../function.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM tugas_besar
                    WHERE   
                    gambar LIKE '%$keyword%' or
                    nama LIKE '%$keyword%' or
                    youtube LIKE '%$keyword%' or
                    deskripsi LIKE '%$keyword%' 
                    ";
                
                
$tubes = query($query);
?>
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
                  <a href="hapus.php?id=<?= $tbs["id"] ?>" class="btn btn-sm text-white bg-danger" 
                  onclick="return confirm('apakah anda yaqin?');">Hapus</a>
                </td>
              </tr>
              <?php } ?>
  </tbody>
</table>