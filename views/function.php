<?php
    $conn = mysqli_connect("localhost","root","","webresep");

function regis($data){
    global $conn;
    $user = $data["nama"];
    $email = $data["email"];
    $pass = $data["pass"];

    $query = "INSERT INTO data_login VALUES ('','$user','$email','$pass')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


?>