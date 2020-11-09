<?php
require 'functionkoki.php';
$koki = query("SELECT * FROM data_koki");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../LogoKoki.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Data Koki</title>
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

    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="widget">
        <h2>Data</h2>
          <ul class="menusidebar">
            <li><a href="indextambah.php">Koki</a></li>
          </ul>
      </div>
      <div class="widget">
        <h2>Resep Populer</h2>
          <ul class="menusidebar">
            <li><a href="">Rendang Daging Padang</a></li>
            <li><a href="">Rawon</a></li>
            <li><a href="">Sate Ayam Madura</a></li>
      <br><br>
          </ul>
      </div>
      </aside>

    <!-- Data Koki -->
    <center><h1>DATA KOKI</h1></center>
    <a href="tambah.php">&nbsp;&nbsp;Tambah Data Koki</a>
    <center><table border="2" cellpadding="10" cellspacing="0">
      <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Karir</th>
          <th>Asal Negara</th>
          <th>Aksi</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach($koki as $row) : ?>
      <tr>
          <td><?= $i; ?></td>
          <td><?= $row["nama_koki"]; ?></td>
          <td><?= $row["karir"]; ?></td>
          <td><?= $row["asal"]; ?></td>
          <td>
            <a href="edit.php?id=<?= $row["id"]?>">Ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]?>">Hapus</a>
          </td>
      </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </table>

    </center>
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