<?php
$conn = mysqli_connect('localhost', 'root', '', 'wpsmt5');

//pemanggilan data
function query($query)
{
  global $conn;

  //mengabil data
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  //pemanggilan elemen data
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
