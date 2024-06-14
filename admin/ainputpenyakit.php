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
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="../Js/validator.js"></script>
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }
    .wrapper {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    .content {
      flex: 1;
    }
  </style>
</head>
<body>

<div class="wrapper">
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

  <div class="container-fluid content text-center">    
    <div class="row content">
      <div class="col-sm-12 text-left">
          <h2 class="text-center mt-5 pt-5">INPUT PENYAKIT</h2>
          <form class="form-horizontal" method="post" data-toggle="validator" role="form" action="ainputpenyakit.php">
              <div class="form-group row has-feedback">
                  <label class="col-sm-2 col-form-label" for="idpenyakit">ID Penyakit:</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="idpenyakit" name="idpenyakit" required data-error="Isi kolom dengan benar">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              <div class="form-group row has-feedback">
                  <label class="col-sm-2 col-form-label" for="namapenyakit">Nama Penyakit:</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="namapenyakit" name="namapenyakit" required data-error="Isi kolom dengan benar">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="pengendalian">Pengendalian:</label>
                  <div class="col-sm-10">
                      <textarea rows="8" class="form-control" id="pengendalian" name="pengendalian"></textarea>
                  </div>
              </div>
              <div class="form-group row">
                  <div class="col-sm-10 offset-sm-2">
                      <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                  </div>
              </div>
          </form>
          <br>
          <?php
          if(isset($_POST['submit'])){
              $idpenyakit = $_POST['idpenyakit'];
              $namapenyakit = $_POST['namapenyakit'];
              $pengendalian = $_POST['pengendalian'];

              $query = "INSERT INTO penyakit (idpenyakit, namapenyakit, pengendalian) VALUES ('$idpenyakit', '$namapenyakit', '$pengendalian')";
              $result = mysqli_query($konek_db, $query);

              if($result){
                  echo '<script>alert("Data Berhasil disimpan");</script>';
                  echo '<script>window.location.href="penyakit.php";</script>';
              }
          }
          ?>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-white text-center py-1">
      <p>&copy; 2024 Sistem Pakar. All rights reserved.</p>
  </footer>
</div>

</body>
</html>
