<?php
include "../connection/session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .header-title {
      margin-top: 100px;
      margin-bottom: 40px;
    }
    .content-section {
      margin-bottom: 40px;
    }
    .icon {
      font-size: 50px;
      color: #007bff;
    }
    .feature-img {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Sistem Pakar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ml-3">
                    <a class="nav-link active" href="homeadmin.php">Home</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="penyakit.php">CRUD Penyakit</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="gejala.php">CRUD Gejala</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="basispengetahuan.php">CRUD Basis Pengetahuan</a>
                </li>
            </ul>

            <form class="form-inline ml-auto" role="search">
                <a class="btn btn-outline-success" id="myBtn" href="logout.php">Logout</a>
            </form>
        </div>
    </div>
</nav>

<div class="container text-center header-title">    
  <h1>SISTEM PAKAR DIAGNOSA PENYAKIT THT</h1>
  <p>Selamat datang <?php echo $login_session; ?>. Silahkan pilih menu yang diinginkan.</p>
</div>

<div class="container content-section">
  <h2 class="text-center">Metode Sistem Pakar yang Digunakan</h2>
  <div class="row">
    <div class="col-md-6">
      <h3 class="text-center"><i class="icon ion-md-git-compare"></i> Forward Chaining</h3>
      <p>Forward Chaining adalah metode inferensi yang bekerja dengan cara memulai dari sekumpulan fakta dan menerapkan aturan-aturan untuk mengeluarkan lebih banyak fakta hingga tujuan tercapai. Dalam konteks sistem pakar untuk diagnosa penyakit THT, proses ini dimulai dengan gejala-gejala yang dimasukkan oleh pengguna. Sistem kemudian menggunakan aturan-aturan yang ada untuk menyimpulkan penyakit yang mungkin berdasarkan gejala-gejala tersebut.</p>
    </div>
    <div class="col-md-6">
      <img src="../assets/Forward-Chaining.png" alt="Forward Chaining" class="feature-img">
    </div>
  </div>
</div>

<div class="container content-section">
  <div class="row">
    <div class="col-md-6">
      <img src="../assets/Aturan-Produksi.jpg" alt="Aturan Produksi" class="feature-img">
    </div>
    <div class="col-md-6">
      <h3 class="text-center"><i class="icon ion-md-settings"></i> Aturan Produksi</h3>
      <p>Aturan Produksi adalah pernyataan kondisional yang menghubungkan satu atau lebih kondisi dengan satu atau lebih aksi atau kesimpulan. Aturan-aturan ini biasanya dalam bentuk "Jika [kondisi] maka [aksi/kesimpulan]". Dalam sistem pakar ini, aturan produksi digunakan untuk memetakan gejala-gejala ke diagnosa penyakit. Contoh aturan produksi bisa seperti "Jika [gejala1] dan [gejala2], maka [penyakit]". Aturan-aturan ini membantu sistem dalam menentukan diagnosa yang paling tepat berdasarkan gejala-gejala yang diamati.</p>
    </div>
  </div>
</div>

<footer class="bg-dark text-white text-center py-1">
    <p>&copy; 2024 Sistem Pakar. All rights reserved.</p>
</footer>

<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#loginModal").modal();
  });
});
</script>

</body>
</html>
