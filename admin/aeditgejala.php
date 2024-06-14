<?php
include('../connection/koneksi.php');

if(isset($_SESSION['login_user'])){
    header("location: about.php");
    exit();
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
        padding-top: 70px; 
    }
    .content {
        padding: 20px;
    }
    footer {
        background-color: #343a40;
        color: white;
        padding: 10px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
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
                    <a class="nav-link" href="penyakit.php">CRUD Penyakit</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link active" href="gejala.php">CRUD Gejala</a>
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

<div class="container-fluid text-center content-wrapper">    
  <div class="row justify-content-center">
    <div class="col-sm-8 text-left">
        <h2 class="text-center">EDIT GEJALA</h2>
        <form method="post">
          <div class="form-group row">
            <label class="control-label col-sm-2" for="idgejala">ID :</label>
            <div class="col-sm-10">
                <?php
                    $id = $_GET['id'];
                    $tampil = "SELECT * FROM gejala WHERE idgejala='$id'";
                    $sql = mysqli_query($konek_db, $tampil);
                    $data = mysqli_fetch_array($sql);
                    echo "<input type='text' name='idgejala' class='form-control' id='idgejala' disabled value='".$data['idgejala']."'>";
                ?>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-2" for="gejala">GEJALA :</label>
            <div class="col-sm-10">
                <?php
                    echo "<input type='text' class='form-control' id='gejala' name='gejala' value='".$data['gejala']."'>";
                ?>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-2" for="keterangan">Keterangan :</label>
            <div class="col-sm-10">
                <?php
                    echo "<input type='text' class='form-control' id='keterangan' name='keterangan' value='".$data['keterangan']."'>";
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
              $gejala = $_POST['gejala'];
              $keterangan = $_POST['keterangan'];
              $query = "UPDATE gejala SET gejala='$gejala', keterangan='$keterangan' WHERE idgejala='$id'";
              mysqli_query($konek_db, $query);
              header('location:gejala.php');
              exit();
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
