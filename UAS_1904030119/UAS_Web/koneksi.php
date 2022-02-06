<?php

$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "uas_1904030119";

$conn = mysqli_connect($host, $user, $pass, $db);

$result = mysqli_query($conn, "SELECT * FROM data_barang");
