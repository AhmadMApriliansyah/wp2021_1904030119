 <?php

  require 'functions.php';


  if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
      echo
      "<script>
    alert('data berhasil di tambah');
    document.location.href ='index.php';
    </script>";
    } else {
      echo
      "<script>
    alert('data tidak berhasil di tambah');
    </script>";
    }
  }



  ?>


 <!doctype html>
 <html lang="en">

 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="tema/fontawesome/css/all.min.css">

   <title>CRUD</title>
 </head>

 <body>
   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-dark fi">
     <div class="container-fluid">
       <a class="navbar-brand text-white" href="#">SIPEMABA || Kampus Kita</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         </ul>
         <div class="text-white">
           <?php echo date('l, d-m-y'); ?>
         </div>
       </div>
   </nav>
   <!--sidebar-->
   <div class="row">
     <div class="col-md-2 bg-secondary ">
       <!--menu-->
       <ul class="nav flex-column">
         <li class="nav-item">
           <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-tachometer-alt"></i> Dhasboard</a>
           <hr class="bg-dark">

         </li>
         <li class="nav-item">
           <a class="nav-link text-white" href="index.php"><i class="fas fa-users"></i> Calon Mahasiswa</a>
           <hr>
         </li>
         <li class="nav-item">
           <a class="nav-link text-white" href="tambah.php"><i class="fas fa-user-edit"></i> Input Camaba</a>
           <hr>
         </li>
         <li class="nav-item">
           <a class="nav-link text-white" href="#"><i class="fas fa-chalkboard-teacher"></i> Daftar Dosen</a>
           <hr>
         </li>
         <li class="nav-item">
           <a class="nav-link text-white" href="#"><i class="fas fa-calendar-alt"></i> Jadwal Kuliah</a>
         </li>
       </ul>
     </div>
     <div class="col-md-10 p-5 pt-3">
       <!--conten-->
       <h3><i class="fas fa-users"></i> Input Data Calon Mahasiswa</h3>
       <hr>
       <form method="POST" action="">
         <div class="form-group">
           <label for="Nama">Nama</label>
           <input type="text" class="form-control" id="Nama" placeholder="Nama Lengkap" name="Nama" autofocus required autocomplete="off">
         </div>
         <div class="form-group">
           <label for="alamat">alamat</label>
           <input type="text" class="form-control" id="alamat" placeholder="Alamat Lengkap" name="alamat" required autocomplete="off">
         </div>
         <div class="form-group">
           <label for="jenis_kelamin">Jenis Kelamin</label>
           <input type="text" class="form-control" id="jenis_kelamin" placeholder="jenis_kelamin" name="jenis_kelamin" required autocomplete="off">
         </div>
         <div class="form-group">
           <label for="agama">Agama</label>
           <input type="text" class="form-control" id="agama" placeholder="agama" name="agama" required autocomplete="off">
         </div>
         <div class="form-group">
           <label for="sekolah_asal">Asal_Sekolah</label>
           <input type="text" class="form-control" id="sekolah_asal" placeholder="sekolah_asal" name="sekolah_asal" required autocomplete="off">
         </div>
         <div class="form-group">
           <label for="foto_maba">Foto</label>
           <input type="text" class="form-control" id="foto_maba" placeholder="foto_maba" name="foto_maba" required autocomplete="off">
         </div>

         <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
       </form>

     </div>
   </div>

   <!-- Optional JavaScript; choose one of the two! -->

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <!-- Option 2: Separate Popper and Bootstrap JS -->
   <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
 </body>

 </html>