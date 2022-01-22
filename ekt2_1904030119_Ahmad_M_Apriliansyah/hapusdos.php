<?php
require 'functions.php';
//agar tidak bisa masuk secara manual pada url
if (!isset($_GET['Nidn'])) {
  header("location : dosen.php");
  exit;
}

$id = $_GET['Nidn'];
hapus($id);
if (hapus($_id) > 0) {
  echo
  "<script>
    alert('data berhasil di hapus');
    document.location.href ='dosen.php';
    </script>";
} else {
  echo
  "<script>
    alert('data gagal di hapus');
    </script>";
}
