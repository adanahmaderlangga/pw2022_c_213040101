<?php 
// menghubungkan ke function
require 'function.php';
// dari mana data di ambil
$tubes = query("SELECT * FROM tugas_besar");

// logic cari 
if (isset($_GET["cari"])) {
            $keyword= $_GET["keyword"];
            $query= "SELECT * FROM tugas_besar
            WHERE   
            gambar LIKE '%$keyword%' or
            nama LIKE '%$keyword%' or
            youtube LIKE '%$keyword%' or
            deskripsi LIKE '%$keyword%' 
            ";


  $tubes = query($query);
}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <!-- akhir -->


    

    <title>Berpikir Positif Itu Penting!</title>
  </head>
  <>
    
  <body >
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top" >
      <div class="container-fluid">
        <a class="navbar-brand btn btn-outline-primary" href="loginadmin.php">Log in</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#description">Description</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#ulasan vidio">vidio!</a>
            </li>
          </ul>
          <form action="#ulasan vidio" method="get" class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" id="cari" name="keyword" autocomplete="off" aria-label="Search"/>
            <button class="btn btn-outline-success" type="submit" name="cari">Search</button>
          </form>
          
        </div>
      </div>
    </nav>
    <!--akhir navbar-->

    <!-- bander -->
    <section class="jumbotron text-center p-5 ">
      <img src="img/berpikir3.jpg" alt="" width="150" class="rounded-circle img-thumbnail" />
      <h1 class="display-5 fst-italic">Positif Thinking</h1>
      <p class="lead">Sering sekali dianggap tak Penting namun Berdampak besar Bagi Kehidupan</p>
    </section>
    
    <!-- akhir bander-->
        <!-- description-->
        <section id="description" style="padding-top:5rem;">
          <div class="container">
            <div class="mb-1">
              <div class="col">
                <h2>Description</h2>
                <hr>
              </div>
              <div>
                  <div>
                    <ul> 
                          <h5>apa itu positif thinking ?</h5>
                          <hr>
                          hal yang pasti terpancar ketika melihat judul yang saya berikan dalam artikel ini oleh teman2 pembaca pasti adalah apa si positif 
                          thinking itu ? menurut saya pribadi positif thinking itu adalah sebuah pikiran baik yang dapat menciptakan perbuatan baik dan hasilnya
                          pun baik untuk diri sendiri maupun orang lain.adapun menurut SUSETYO (1998), berpikir positif adalah
                          kemampuan berpikir seseorang untuk memusatkan perhatian pada sisi positif dari keadaan diri,
                          orang lain,dan situasi yang dihadapi .berpikir positif tidak akan datang dengan sendirinnya melainkan 
                          sebuah keterampilan yang harus dipelajari!
                    </ul>
                    <ul>
                          <h5>kapan kita harus memiliki pikiran positif ini?</h5>
                          <hr>
                          selanjut setelah mengetahui apa itu positif thiking pasti temen2 juga akan bertannya kapan si waktu yang tepat untuk saya punya pikiran
                          positif thinking ini .. jawabanya adalah setiap hari, setiap waktu dan setiap deitk, karena banyak sekali hal2 yang kita dapatkan dari positif thinking ini diantarannya
                          adalah kita bisa benar2 mengatur diri kira sendiri,mengapa demikian ? karena pada kenyataan nya hal positif itu mudah di ucapkan dan dipikirkan 
                          namun sangat lah sulit untuk dilakukan. tapi jangan risau disini saya akan menjelaskan bagaimana agar kita bisa mengimplementasikan positif thinking ini dalam kehidupan sehari-hari.
                    
                    </ul>
                    <ul>
                          <h5>mengapa kita harus berpikir positif?</h5>
                          <hr>
                          banyak orang yang menyepelekan tentang hal ini .yang namun sebenarnya hal ini sangat lah berpengaruh dengan kehidupan manusia.
                          mengapa saya bilang sangat berpengaruh dalam kehidupan? karena seseoarang hanya akan mendapat 2 perkara dalam pikiran nya yaitu 
                          pikiran positif dan pikiran negatif. yang mana bila mana pikiran kita terpaku pada suatu yang positif maka akan menjadi titik awal'
                          kesuksesan dalam diri kita sebaliknya jikalau kita terpaku atau dalam kata lain berada di fase pikiran negatif maka itu akan menjadi
                          sebuah bencana untuk kehidupan kita ke depan nya.
                          seperti hal nya kebaikan dan keburukan, sekarang saya tanya kepada kalian sebagai pembaca kalian lebih memilih mendapatkan kebaikan 
                          dalam kehidupan kalian atau malah sebaliknya mendapatkan keburukan ? saya yaqin semuanya pasti menginginkan kebaikan. tapi yang jadi
                          pertanyaan nya lagi lebih enak mana melakukan sebuah kebaikan atau keburukan? walau ada beberapa orang yang menjawab lebih senang melakukan kebaikan
                          namun pada fakta lapangan nya manusia itu dominan lebih nyaman terhadap sebuah keburukan / kesalahan , mengapa? karena biasannya , atau lebih
                          tepatnya bukan hanya biasannya melainkan sudah menjadi sebuah kebiasaan di dalam sebuah kehidupan yang namannya keburukan atau kesalahan itu 
                          lebih asik dan lebih nikmat untuk dinikmati atau dijalani . dan sebaliknya kebaikan itu sangatlah berat untuk di jalani .nah dari situlah mengapa
                          saya menyatakan bahwa  berpikir positif itu sangatlah penting.karena tanpa  pikiran yang positif kebaikan tidak akan tercipta.
                          <hr>
                    </ul>
                    
                    <ul>

                      <h2>manfaat-berpikir-positif-untuk-kesehatan-tubuh-dan-jiwa-kamu</h2>
                      <img src="img/positif.jpg" class="justify-content-center me-3" style="width: 500px;, height:400px;" alt="...">
                      <hr>
                      <h6>1. Mengurangi Stress dan Mencegah Depresi</h6>
                      <p>Dari aspek psikologis, sikap yang menunjukkan negatif dan cenderung pesimis bisa menyebabkan stres dan depresi. Sehingga untuk mengatasinnya, kamu perlu
                        mengubah sudut pandang mu dalam melihat  segala sesuatu. selalu lihat kemungkinan sisi positif dan kebaikan dari perspektif yang berbeda.jika kamu mulai terbiasa
                      berpikir positif ,kamu akan merasakan perubahan mood, emosi,dan pikiran yang lebih baik. tekanan akibat stres dan depresi pun bisa jauh berkurang. </p>
                        <h6>2. Memperkuat Imun Tubuh</h6>
                        <p>Cegah penyakit fisik dengan sering berpikir Positif. Hal ini seseuai studi yang dilansirkan dari John Hopkins Medicine, bahwa pikiran negatif
                          dapat menyebabkan imun tubuh melemah. Sebalikya, jika ingin kekebalan tubuh aktif, sering-seringlah menjaga kesehatan pikiran dengan bersyukur dan 
                          mengisinnya dengan hal-hal positif bagi jiwa.
                        </p>
                        <h6>3. Tidak Mudah Sakit </h6>
                        <p>Kesehatan Mental yang selalu optimal tak lepas dari pikiran positif dalam keseharian. Penuhi pikiranmu dengan hal-hal menyenangkan dan kelilingi dirimu 
                          bersama orang-orang yang membuat mu merasa nyaman. JAUHI MEREKA YANG TOXIC. Dengan begitu, kamu akan merasakan manfaat seperti tubuh yang kuat, lebih sembuh
                          setelah sakit, masa pemulihan fisik yang relatif singkat, dan memiliki imunitas tubuh lebih baik dari penyakit berbahaya.
                        </p>
                        <h6>4. Lebih Kuat Menghadapi Krisis</h6>
                        <p>
                          Berpikir positif mampu membuatmu bertahan lebih kuat ketika mengalami kondisi terpuruk atau hancur akibat masalah yang dihadapi.
                          Kamu juga cenderung mampu melihat potensi untuk bangkit dari krisis dan trauma, serta mampu mencari solusi untuk mengatasi kesulitan.
                        </p>
                        <h6>5. Lebih mudah Menerapkan Pola hidup Sehat</h6>
                        <p>
                          Mampu berpikir positif juga berdampak signifikan dalam meningkatkan kualitas hidup yang lebih baik. misalnya berkaitan dengan pola hidup sehat.
                          kamu pun bisa melihat apa saja yang berpotensi membahayakan diri, mampu mengurangi kebiasaan buruk, gaya hidup tak sehat, serta bisa memilih 
                          Menerapkan pola hidup positif untuk kesehatan jiwa dan fisik 
                        </p>
                    </ul>
                    <ul>
                      <h1>Cara Berpikir positif yang bisa kamu lakukan Mulai Sekarang!</h1>
                      
                      <img src="img/berpikir2.jpg" class="justify-content-center me-3" style="width:600px;, height:400px;" alt="...">
                      
                      <hr>
                      <h6>1. Hindari self-talk yang bersifat Negatif</h6>
                      <p>
                        kenali kapan kamu mulai mengkritik diri sendiri maupun orang lain secara berlebihan. segera 
                        berhenti dan analisis pikiranmu untuk fokus pada solusi daripada menyalahkan diri.
                      </p>
                      <h6>2. Sesekali Tertawa dengan Humor</h6>
                      <p>
                        Hidup jangan diisi dengan hal-hal yang selalu serius.Sesekali kendurkan syaraf-syaraf pikiran dengan 
                        tertawa sejenak dengan melihat vidio kucing lucu, meme,atau luconan dari teman sebaya. tersenyum dan tertawa
                        efektif menurunkan tekanan darah , stres, dan risiko penyakit berbahaya.
                      </p>
                      <h6>3. Memandang Dengan Optimis</h6>
                      <p>Selalu pikirkan bahwa apa yang kamu lakukan memiliki sisi positif dan tidak semuannya buruk. alihkan dengan mengganti
                        sudut pandang yang berbeda dan percayalah, kamuu akan melihat bahwa kamu tak sendirian. Semua orang 
                        memiliki masalah dan bisa jadi masalah mereka lebih besar dari yang kamu hadapi.
                      </p>
                      <h6>4. Kelilingi Dirimu Dengan Orang-Orang dengan Vibe Positif</h6>
                      <p>Fokus mensyukuri segala kebaikan mereka yang peduli denganmu, demi menjaga kesehatan mental. 
                        Jaga hubungan baik dengan keluarga,teman , dan kerabat yang membuatmu merasa aman ,nyaman , dan dicintai apa adannya.
                        Tumbuhkan pikiran positif mu dengan merawat diri dari dalam dan luar.
                      </p>
                      <hr>
                      <h2>Pikiran negatif bisa dengan mudah memengaruhi diri seseorang</h2>

                      <img src="img/stress.jpg" class="justify-content-center me-3" style="width:600px;, height:400px;" alt="...">
                      <hr>
                        <p>
                        Jangan remehkan efek pikiran. Ya, karena tanpa sadar penyebab paling sederhana dari kegagalan maupun keberhasilan yang Anda alami itu berkat pengaruh dari pikiran Anda sendiri. Jadi, ketika pikiran Anda dipenuhi oleh hal-hal yang berbau negatif, lambat laun itu akan memunculkan stres yang akhirnya malah mengacaukan apa yang sedang Anda jalani.
                        Mudahnya begini, pikiran negatif itu sama saja seperti ketika Anda berbicara dengan diri sendiri. Namun di sini, Anda tidak sedang menyemangati atau mendorong diri Anda untuk terus maju. Sebaliknya, Anda justru menyalahkan dan meremehkan kemampuan yang Anda miliki.
                        Coba ingat-ingat kembali, pernahkah Anda berpendapat pada diri sendiri mengenai: “Saya tidak akan bisa melakukan hal itu”, “Sepertinya, tidak ada lagi yang bisa diharapkan dari diri saya”, atau bahkan “Untuk apa berjuang, kalau pada akhirnya saya tetap gagal juga”.
                        Mungkin terlihat sepele, tapi segelintir ucapan itulah yang tenyata berdampak cukup besar pada pikiran, tubuh, hingga hidup Anda.
                        Intinya, bicara hal yang negatif dengan diri sendiri alias negative self talk merupakan sebuah dialog batin yang hanya dilakukan oleh Anda sendiri, tapi bisa membatasi kemampuan dan rasa percaya diri dalam waktu yang bersamaan.
                        </p>
                    </ul>
                    

                    
                  </div>
              </div>
              </div>
              </div>
            </div>
          </div>
        </section>
        <hr>
        <!-- akhir description-->
            <!-- ulasan vidio -->
            
          <section id="ulasan vidio" class="text-center" style="padding-top:5rem ;">
              <ul>
                <h2>Referensi Beberapa Vidio Untuk Anda!</h2>
              </ul>
              <br>
              <!-- logic pengambilan data ke database -->
              <?php $i = 1; foreach($tubes as $tbs) { ?> 
                <br>
              <div class="position-relative ">
                <img src="img/<?php echo $tbs["gambar"]; ?>" class="justify-content-center me-3" style="width:250px;, height:200px;" alt="...">
                <div>
                  <br>
                  <h5 class="mt-0 fw-bold"><?php echo $tbs["nama"]; ?></h5>
                  <div class="row justify-content-center fs-6 text-center">
                  <p class="fst-italic col-md-4"><?php echo $tbs["deskripsi"]; ?></p>
                  </div>
                  <a href="<?php echo $tbs["youtube"]; ?>" class="stretched-link">Tonton Disini</a>
                  
                </div>
              </div>
                <br>
                <?php  } ?>
          </section>
          <br>
               
      <!-- akhir ulasan vidio -->
  
        

          <!-- footer -->
    <footer class="bg-info text-white pb-5 text-center">
        <p> <a class="text-white">Social Media  <a href="https://web.facebook.com/angga.slank.568/"><i class="bi bi-facebook"></i></a></a>   
          <a href="https://www.tiktok.com/@santri.dzulmajid"><i class="bi bi-tiktok"></i></a> 
          <a href="https://www.instagram.com/aang_222/"><i class="bi bi-instagram"></i></a> </a></p>
        <p> </p>
    </footer>
   <!-- akhir footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
