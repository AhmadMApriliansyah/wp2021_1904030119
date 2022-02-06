<?php
require 'functions.php';
include 'koneksi.php';

$id = $_GET["id"];
hapus($id);
if (hapus($_id) > 0) {
  echo
  "<script>
    alert('data berhasil di hapus');
    document.location.href ='barangsatu.php';
    </script>";
} else {
  echo
  "<script>
    alert('data gagal di hapus');
    </script>";
}
