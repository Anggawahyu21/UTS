<?php
require 'functionkoki.php';
if (isset($_POST["submit"])){
    if(tambah ($_POST) > 0 ){
    echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href='indextambah.php';
        </script>";
    } else {
    echo "
        <script>
            alert('data gagal ditambahkan');
            document.location.href='indextambah.php';
        </script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Koki</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama_koki">Nama : </label>
                <input type="text" name="nama_koki" id="nama_koki" required>
            </li>
            <li>
                <label for="karir">Karir : </label>
                <input type="text" name="karir" id="karir" required>
            </li>
            <li>
                <label for="asal">Asal Negara : </label>
                <input type="text" name="asal" id="asal" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>

    </form>
</body>
</html>