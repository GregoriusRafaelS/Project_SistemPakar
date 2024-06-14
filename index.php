<?php
include('connection/koneksi.php');

if (isset($_SESSION['login_user'])) {
    header("location: about.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sistem Pakar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class='pt-5'>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Sistem Pakar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ml-3">
                    <a class="nav-link active" href="index.php">Beranda</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="users/daftarpenyakit.php">Daftar Penyakit</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="users/diagnosa.php">Diagnosa Penyakit</a>
                </li>
                <li class="nav-item ml-3">
                  <a class="nav-link" href="users/daftargejala.php">Daftar Gejala</a>
                </li>
              </ul>
              
            <form class="form-inline ml-auto" role="search">
                <a class="btn btn-outline-success" id="myBtn" href="#">Login</a>
            </form>
        </div>
    </div>
</nav>

<div class="container my-5" id="home">
    <div class="row">
        <div class="col-lg-9 mx-auto text-center">
            <h2>Sistem Pakar Diagnosa Penyakit THT</h2>
            <p class="lead">Selamat datang di Sistem Pakar. Gunakan sistem ini untuk mendiagnosa penyakit THT yang mungkin Anda alami!</p>
        </div>
    </div>
</div>

<div class="container my-5" id="fitur">
    <div class="row">
        <div class="col-lg-9 mx-auto">
            <h3>Fitur Aplikasi</h3>
            <p>Sistem pakar ini menyediakan berbagai fitur yang membantu dalam mendiagnosa penyakit THT serta mengelola basis pengetahuan terkait. Berikut adalah fitur-fitur utama yang tersedia dalam aplikasi ini:</p>
            <ul class="list-group">
                <li class="list-group-item">
                    <h5>Lihat Daftar Penyakit</h5>
                    <p>Pengguna dapat melihat daftar penyakit THT yang sudah terdaftar dalam sistem, lengkap dengan deskripsi singkat mengenai masing-masing penyakit.</p>
                </li>
                <li class="list-group-item">
                    <h5>Diagnosa Penyakit</h5>
                    <p>Fitur ini memungkinkan pengguna untuk mendiagnosa penyakit berdasarkan gejala yang dialami. Sistem akan memberikan hasil diagnosa beserta rekomendasi tindakan selanjutnya.</p>
                </li>
                <li class="list-group-item">
                    <h5>CRUD Basis Pengetahuan</h5>
                    <p>Admin dapat melakukan operasi CRUD (Create, Read, Update, Delete) pada basis pengetahuan yang digunakan oleh sistem pakar. Hal ini memungkinkan pembaruan data penyakit dan gejala secara berkala.</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container my-5" id="team">
    <div class="row">
        <div class="col-lg-9 mx-auto">
            <h3>Tim Pengembang</h3>
            <p>Berikut adalah anggota tim yang terlibat dalam pengembangan sistem pakar ini:</p>
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">
                    <img src="assets/rafael_profile.jpg" alt="Gregorius Rafael Santosa" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;">
                    <h5>Gregorius Rafael Santosa</h5>
                    <p>NIM: 123210102</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="assets/farras-profile.jpg" alt="Farras Hafizhah" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;">
                    <h5>Farras Hafizhah</h5>
                    <p>NIM: 123210052</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="helper/ceklogin.php">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
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
