<?php
$conn = mysqli_connect('localhost', 'root', '', 'wpsmt5');

//pemanggilan data
function query($query)
{
  global $conn;

  //mengabil data
  $result = mysqli_query($conn, $query);

  //pemanggilan elemen data
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
