<?php

$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "wpsmt5";

$conn = mysqli_connect( $host, $user, $pass, $db);

$result = mysqli_query($conn, "SELECT * FROM calon_mhs");

//Ambil data dari tabel calon mhs
//msqli_fetch_row(); mengembalikan data dalam bentuk numerik
//msqli_fetch_assoc() mengembalikan data dalam bentuk field
//msqli_fetch_array() mengembalikan data dalam bentuk numerik dan nama field
//while ($camaba = mysqli_fetch_array($result)){
  //  var_dump($camaba);    
//}

?>