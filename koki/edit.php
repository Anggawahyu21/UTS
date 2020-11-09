<?php
require 'functionkoki.php';

$id = $_GET["id"];

$edit = query("SELECT * FROM data_koki WHERE id=$id")[0];

if (isset($_POST["submit"])){
    if(edit($_POST) > 0 ){
    echo "
        <script>
            alert('data berhasil diubah');
            document.location.href='indextambah.php';
        </script>";
    } else {
    echo "
        <script>
            alert('data gagal diubah');
            document.location.href='indextambah.php';
        </script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data Koki</h1>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?= $edit["id"]; ?>">
        <ul>
            <li>
                <label for="nama_koki">Nama : </label>
                <input type="text" name="nama_koki" id="nama_koki" required value="<?= $edit["nama_koki"];?>">
            </li>
            <li>
                <label for="karir">Karir : </label>
                <input type="text" name="karir" id="karir" required value="<?= $edit["karir"];?>">
            </li>
            <li>
                <label for="asal">Asal : </label>
                <input type="text" name="asal" id="asal" required value="<?= $edit["asal"];?>">
            </li>
            <li>
                <button type="submit" name="submit">Edit Data</button>
            </li>
        </ul>
    </form>
</body>
</html>