<?php
$conn = mysqli_connect("localhost","root","","webresep");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows =[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $nama = htmlspecialchars($data["nama_koki"]);
    $karir = htmlspecialchars($data["karir"]);
    $asal = htmlspecialchars($data["asal"]);
     

    $query = "INSERT INTO data_koki
            VALUES 
            ('','$nama','$karir','$asal'
            )";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM data_koki WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama_koki"]);
    $karir = htmlspecialchars($data["karir"]);
    $asal = htmlspecialchars($data["asal"]);
     

    $query = "UPDATE data_koki SET
           nama_koki = '$nama',
           karir = '$karir',
           asal = '$asal'
           WHERE id=$id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>