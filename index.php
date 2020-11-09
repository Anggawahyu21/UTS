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
    <link rel="icon" type="image/png" href="LogoKoki.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Beranda Resepic</title>
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
            <font size="6" ><a href="../Progress/index.php" class="nav-link text-warning">RESEPiC</a></font>
            <li class="nav-item active">
              <a class="nav-link text-warning" href="../Progress/index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="tentang/tentang.php">Tentang</a>
            </li>
          </ul>
          <form class="form" action="">
			<a class="btn btn-outline-warning" href="views/logout.php" role="button">Log Out</a>
          </form>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="widget">
        <h2>Data</h2>
          <ul class="menusidebar">
            <li><a class="nav-link text-warning" href="koki/indextambah.php">Koki</a></li>
          </ul>
      </div>
      <div class="widget">
        <h2>Resep Populer</h2>
          <ul class="menusidebar">
            <li><a class="nav-link text-warning" href="">Rendang Daging Padang</a></li>
            <li><a class="nav-link text-warning" href="">Rawon</a></li>
            <li><a class="nav-link text-warning" href="">Sate Ayam Madura</a></li>
      <br><br>
          </ul>
      </div>
      </aside>

      <!-- Konten -->
      <div class="blog">
      <div class="conteudo">
        <br>
        <h1> Soto Ayam </h1>
        <img src="img/soto.jpg">
      <hr>
      <div class="post-info">
      Di Posting Oleh <b>Angga Wahyu</b>
      </div>
        <p>
        Soto merupakan salah satu resep masakan Indonesia yang mempunyai banyak
        variasi,  soto ayam, soto daging, soto babat, soto sulung, soto Betawi, soto mie dan
        masih banyak lagi. Variasi tersebut bisa berdasarkan bahan/isi, tambahan bumbu
        atau tempat di mana resep itu berasal.<br>Resep yang kami pilih adalah resep soto ayam bening yang biasa dimasak sebagai
        masakan rumahan keluarga Indonesia.
        <a href="Post/post1.php" class="continue-lendo">Selengkapnya →</a>
        </p>
      </div>
      <div class="conteudo">
      <br>
        <h1> Mie Goreng </h1>
        <img src="img/mie.jpg">
      <hr>
      <div class="post-info">
      Di Posting Oleh <b>Angga Wahyu</b>
      </div>
        <p>
        Mie goreng mungkin bukan masakan asli Indonesia, tapi sudah menjadi resep
        masakan Indonesia yang sangat populer dan disukai hampir<br> semua masyarakat
        Indonesia mulai dari anak-anak sampai orang tua. Resep berikut mudah dan praktis,
        yuk dicoba.
        <a href="Post/post2.php" class="continue-lendo">Selengkapnya →</a>
       </p>
       <br>
      </div>
      </div>

  <!-- Footer -->
  </div>
	  <footer class="footer">
		  <font color="#cabd07">Copyright &#169; Angga Wahyu</white>
	  </footer>
  </div>
  
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    

</body>
</html>