<?php
// Array Numerik
// Array yang index-nya ber-asosiasi / berpasangan dengan angka

$mahasiswa = [
["ADAN AHMAD ERLANGGA", "213040101", "ADANAHMAD551@GMAIL.COM", "Teknik Informatika"],
["LUKMANUL HAKIM", "213040079", "HAKIM@gmail.com", "MAHASISWA MARKETING"]
];

// var_dump($mahasiswa[1][3]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
<li>Nama: <?php echo $mhs[0]; ?></li>
<li>NPM: <?php echo $mhs[1]; ?></li>
<li>Email: <?php echo $mhs[2]; ?></li>
<li>Jurusan: <?php echo $mhs[3]; ?></li>
</ul>
<?php } ?>

