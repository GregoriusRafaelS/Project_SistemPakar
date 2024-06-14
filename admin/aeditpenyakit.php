<?php
include('../connection/koneksi.php');
 
if(isset($_SESSION['login_user'])){
header("location: about.php");
}
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
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <style>
    html, body {
        height: 100%;
        margin: 0;
    }
    body {
        display: flex;
        flex-direction: column;
    }
    .content-wrapper {
        flex: 1;
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
                    <a class="nav-link" href="homeadmin.php">Home</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link active" href="penyakit.php">CRUD Penyakit</a>
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
  
<div class="container-fluid text-center content-wrapper mt-5 pt-5">    
  <div class="row justify-content-center">
    <div class="col-sm-8 text-left"> 
      <h2 class="text-center">EDIT PENYAKIT</h2>
      <form method="post">
        <div class="form-group row">
          <label class="control-label col-sm-2" for="idpenyakit">ID :</label>
          <div class="col-sm-10">
            <?php
              $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
              $sql = mysqli_query($konek_db, $tampil);
              while($data = mysqli_fetch_array($sql)) {
                echo "<input type='text' class='form-control' id='idpenyakit' name='idpenyakit' disabled value='".$data['idpenyakit']."'>";
              }
            ?>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="control-label col-sm-2" for="namapenyakit">NAMA :</label>
          <div class="col-sm-10">
            <?php
              $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
              $sql = mysqli_query($konek_db, $tampil);
              while($data = mysqli_fetch_array($sql)) {
                echo "<input type='text' class='form-control' id='namapenyakit' name='namapenyakit' value='".$data['namapenyakit']."'>";
              }
            ?>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="control-label col-sm-2" for="gejala">GEJALA :</label>
          <div class="col-sm-10">
            <?php
              $tampil = "SELECT * FROM penyakit p, basispengetahuan b where p.idpenyakit='".$_GET['id']."' and p.namapenyakit=b.namapenyakit";
              $sql = mysqli_query($konek_db, $tampil);
              while($data = mysqli_fetch_array($sql)) {
                echo "<input type='text' class='form-control' id='gejala' readonly value='".$data['gejala']."'><br>";
              }
              echo "<input type='text' class='form-control' id='gejala' readonly value=''>";
            ?>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="control-label col-sm-2" for="pengendalian">PENGENDALIAN:</label>
          <div class="col-sm-10">
            <?php
              $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
              $sql = mysqli_query($konek_db, $tampil);
              while($data = mysqli_fetch_array($sql)) {
                echo "<textarea rows='8' class='form-control' id='pengendalian' name='pengendalian'>".$data['pengendalian']."</textarea>";
              }
            ?>
          </div>
        </div>
        
        <div class="form-group row">
          <div class="col-sm-10 offset-sm-2">
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
        
        <?php
          if(isset($_POST['submit'])){
            $id = $_GET['id'];
            $namapenyakit = $_POST['namapenyakit'];
            $pengendalian = $_POST['pengendalian'];
            $query = "UPDATE penyakit SET namapenyakit='".$_POST['namapenyakit']."', pengendalian='".$_POST['pengendalian']."' WHERE idpenyakit='$id'";
            $result = mysqli_query($konek_db, $query);
            if($result){
              echo '<script>alert("Data Berhasil disimpan");</script>';
            }
            echo '<meta http-equiv="refresh" content="0;url=penyakit.php">';
              
            // header("location:penyakit.php");
          }
        ?>
      </form>
    </div>
  </div>
</div>

<footer class="bg-dark text-white text-center py-3 mt-auto">
  <p>&copy; 2024 Sistem Pakar. All rights reserved.</p>
</footer>

</body>
</html>
