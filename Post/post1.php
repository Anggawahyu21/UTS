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
    <title>Resep Soto Ayam</title>
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
        <h1> Soto Ayam </h1>
        <img src="../img/soto.jpg">
      <hr>
      <div class="post-info">
      Di Posting Oleh <b>Angga Wahyu</b>
      </div>
        <p>
        Soto merupakan salah satu resep masakan Indonesia yang mempunyai banyak
        variasi,  soto ayam, soto daging, soto babat, soto sulung, soto Betawi, soto mie dan
        masih banyak lagi. Variasi tersebut bisa berdasarkan bahan/isi, tambahan bumbu
        atau tempat di mana resep itu berasal. Resep yang kami pilih adalah resep soto ayam bening yang biasa dimasak sebagai
        masakan rumahan keluarga Indonesia.
        <br><br><b>&nbsp Bahan : </b>
        <ul>
          <li>1/2 Ekor Ayam</li>
          <li>2 Liter Air</li>
          <li>250gr Tauge panjang</li>
          <li>1 Batang daun bawang</li>
          <li>1 1/2 sdt garam</li>
          <li>3 Lembar daun jeruk</li>
          <li>1 Batang serai</li>
          <li>2 Ruas lengkuas</li>
          <li>2 Ruas jahe</li>
        </ul>
        <b>&nbsp Bumbu Halus : </b>
        <ul>
          <li>1 sdt merica bulat</li>
          <li>8 butir bawang merah</li>
          <li>4 siung bawang putih</li>
          <li>3 ruas kunyit</li>
        </ul>
        <b>&nbsp Pelengkap : </b>
        <ul>
          <li>2 batang seledri iris halus</li>
          <li>1 buah tomat, iris</li>
          <li>bawang merah goreng</li>
          <li>jeruk nipis</li>
        </ul>
        <b>&nbsp Cara membuat : </b>
        <ol>
          <li>Rebus ayam hingga ayam empuk. Kecilkan apinya</li>
          <li>Tumis bumbu halus, daun jeruk, serai, lengkuas, dan jahe hingga keluar aromanya. <br>
              Angkat dan masukkan ke dalam air rebusan ayam. Aduk rata dan
              masak hingga mendidih.</li>
          <li>Tambahkan garam, gula pasir, kaldu bubuk, daun bawang, dan tauge. Aduk rata
              dan masak sebentar lalu angkat.</li>
          <li>Sajikan dalam mangkuk dan beri bahan pelengkap.</li>
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