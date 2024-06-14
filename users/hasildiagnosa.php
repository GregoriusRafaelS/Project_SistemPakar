<?php
include('../connection/koneksi.php');
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
    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #343a40;
        color: white;
        padding: 10px 0;
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
                    <a class="nav-link" href="../index.php">Beranda</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="daftarpenyakit.php">Daftar Penyakit</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link active" href="diagnosa.php">Diagnosa Penyakit</a>
                </li>
                <li class="nav-item ml-3">
                  <a class="nav-link" href="daftargejala.php">Daftar Gejala</a>
                </li>
              </ul>
              
            <form class="form-inline ml-auto" role="search">
                <a class="btn btn-outline-success" id="myBtn" href="#">Login</a>
            </form>
        </div>
    </div>
</nav>

<div class="container" style="margin-top: 70px;">    
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center">DETAIL DIAGNOSA</h2>
      <form class="form-horizontal">
        <div class="form-group row">
          <label class="control-label col-sm-2" for="idpenyakit">ID:</label>
          <div class="col-sm-10">
            <?php
              $tampil = "SELECT * FROM penyakit WHERE idpenyakit='".$_GET['id']."'";
              $sql = mysqli_query($konek_db, $tampil);
              while ($data = mysqli_fetch_array($sql)) {
                echo "<input type='text' class='form-control' id='idpenyakit' readonly value='".$data['idpenyakit']."'>";
              }
            ?>
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-sm-2" for="namapenyakit">Nama:</label>
          <div class="col-sm-10">
            <?php
              $tampil = "SELECT * FROM penyakit WHERE idpenyakit='".$_GET['id']."'";
              $sql = mysqli_query($konek_db, $tampil);
              while ($data = mysqli_fetch_array($sql)) {
                echo "<input type='text' class='form-control' id='namapenyakit' readonly value='".$data['namapenyakit']."'>";
              }
            ?>
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-sm-2" for="gejala">Gejala:</label>
          <div class="col-sm-10">
            <?php
              $tampil = "SELECT * FROM penyakit p, basispengetahuan b WHERE p.idpenyakit='".$_GET['id']."' AND p.namapenyakit=b.namapenyakit";
              $sql = mysqli_query($konek_db, $tampil);
              while ($data = mysqli_fetch_array($sql)) {
                echo "<input type='text' class='form-control' id='gejala' readonly value='".$data['gejala']."'>";
              }
            ?>
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-sm-2" for="pengendalian">Pengendalian:</label>
          <div class="col-sm-10">
            <?php
              $tampil = "SELECT * FROM penyakit WHERE idpenyakit='".$_GET['id']."'";
              $sql = mysqli_query($konek_db, $tampil);
              while ($data = mysqli_fetch_array($sql)) {
                echo "<textarea rows='5' class='form-control' id='pengendalian' readonly>".$data['pengendalian']."</textarea>";
              }
            ?>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Login Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form role="form" method="post" action="../helper/ceklogin.php">
          <div class="form-group">
            <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
          </div>
          <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
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
        $("#myModal").modal();
    });
});
</script>

</body>
</html>
