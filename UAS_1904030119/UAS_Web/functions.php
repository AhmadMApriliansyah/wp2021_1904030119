<?php
$conn = mysqli_connect('localhost', 'root', '', 'uas_1904030119');

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
  // tambah data
  function tambah($data)
  {
    global $conn;
    $nama = ($data['nama_barang']);
    $harga_barang = ($data['harga_barang']);
    $stok_barang = ($data['stok_barang']);
    $foto_barang = ($data['foto_barang']);
    $query = "INSERT INTO data_barang 
    VALUES 
    (null,'$nama','$harga_barang','$stok_barang','$foto_barang',');";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
  }
  // hapus data
  function hapus($id)
  {
    global $conn;
    mysqli_query($conn, "DELETE FROM data_barang WHERE id =$id");
    return mysqli_affected_rows($conn);
  }
  // edit data
  function edit($data)
  {
    global $conn;
    $id = $data['id'];
    $nama_barang = htmlspecialchars($data['nama_barang']);
    $harga_barang = htmlspecialchars($data['harga_barang']);
    $stok_barang = htmlspecialchars($data['stok_barang']);
    $foto_barang = htmlspecialchars($data['foto_barang']);
    $query = "UPDATE data_barang SET
              nama_barang ='$nama_barang',
              harga_barang='$harga_barang',
              stok_barang ='$stok_barang',
              foto_barang ='$foto_barang'
              WHERE id= $id;";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
  }
  // caridata
  function cari($keyword)
  {
    global $conn;

    $query = "SELECT * FROM data_barang WHERE nama_barang LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;
  }
}
function simpan($data)
{
  global $conn;
  $id = $data['id'];
  $kritik = $data['kritik'];
  $query = "INSERT INTO kritik
  values
  (Null,$kritik);";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
