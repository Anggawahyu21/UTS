<?php
session_start();
if($_SESSION['id']==''){
    header("location:views/login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../LogoKoki.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Resep Mie Goreng</title>
</head>
<body>
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="../index.php"><img src="img/foto.jpg" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <font size="6" ><a href="../index.php" class="nav-link text-warning">RESEPiC</a></font>
            <li class="nav-item active">
              <a class="nav-link text-warning" href="../index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="../tentang/tentang.php">Tentang</a>
            </li>
          </ul>
          <form class="form" action="">
			<a class="btn btn-outline-warning" href="../views/logout.php" role="button">Log Out</a>
          </form>
        </div>
    </nav>
    
      <!-- Konten -->
      <div class="blog">
      <div class="conteudo">
        <br>
        <h1> Mie Goreng </h1>
        <img src="../img/mie.jpg">
      <hr>
      <div class="post-info">
      Di Posting Oleh <b>Angga Wahyu</b>
      </div>
        <p>
        Mie goreng mungkin bukan masakan asli Indonesia, tapi sudah menjadi resep
        masakan Indonesia yang sangat populer dan disukai hampir<br> semua masyarakat
        Indonesia mulai dari anak-anak sampai orang tua. Resep berikut mudah dan praktis,
        yuk dicoba.
        <br><br><b>&nbsp Bahan : </b>
        <ul>
          <li>1 Bungkus mie telor</li>
          <li>400gr Udang, kupas, belah punggungnya</li>
          <li>5 butir bakso ikan</li>
          <li>2 buah wortel</li>
          <li>1 batang daun bawang</li>
          <li>4 siung bawang merah</li>
          <li>2 suyng bawang putih</li>
          <li>Minyak goreng secukupnya</li>
          <li>3 sdt minyak wijen</li>
          <li>1 1/2 sdt lada bubuk</li>
          <li>Kecap</li>
          <li>Garam</li>
          <li>Air/Kaldu Ayam</li>
        </ul>
        <b>&nbsp Cara membuat : </b>
        <ol>
          <li>Rebus mie telor hingga lunak tapi jangan terlalu lembek,  angkat dan tiriskan.</li>
          <li>Iris wortel, bakso, dan daun bawang.</li>
          <li>Siapkan udang yg telah dikupas bersih</li>
          <li>Haluskan bawang merah dan bawang putih</li>
          <li>Tumis bumbu halus hingga harum, masukkan udang, bakso, wortel.</li>
          <li>Tambahkan minyak wijen kemudian masukkan air, garam, lada sedikit kecap
              manis dan terakhir <br>masukkan mie beserta daun bawang aduk hingga meresap.</li>
          <li>Tambahkan garam sesuai selera.</li>
          <li>Tuang ke dalam piring, Sajikan</li>
        </ol>
        <a href="../index.php" class="continue-lendo">&nbsp ← Kembali</a>
        </p>
      </div>
      </div>
      
  <!-- Footer -->
  </div>
	  <footer class="footer">
		  <font color="#cabd07">Copyright &#169; Angga Wahyu</white>
	  </footer>
  </div>

  <script src="../js/jquery-3.5.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

</body>
</html>