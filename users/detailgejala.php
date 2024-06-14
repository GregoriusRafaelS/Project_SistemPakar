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
    <style>
        .form-group label {
            padding-top: 7px;
        }
        .row.content {
            min-height: calc(100vh - 56px);
        }
        footer {
            background-color: #f1f1f1;
            padding: 10px 0;
            position: relative;
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
                    <a class="nav-link" href="../index.php">Beranda</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="daftarpenyakit.php">Daftar Penyakit</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="diagnosa.php">Diagnosa Penyakit</a>
                </li>
                <li class="nav-item ml-3">
                  <a class="nav-link active" href="daftargejala.php">Daftar Gejala</a>
                </li>
              </ul>
              
            <form class="form-inline ml-auto" role="search">
                <a class="btn btn-outline-success" id="myBtn" href="#">Login</a>
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid text-center mt-5 pt-3">    
    <div class="row content">
        <div class="col-sm-8 offset-sm-2 text-left"> 
            <h2 class="text-center">DETAIL GEJALA</h2>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="idgejala">ID Gejala:</label>
                <div class="col-sm-10">
                    <?php
                        $tampil = "SELECT * FROM gejala WHERE idgejala='" . $_GET['id'] . "'";
                        $sql = mysqli_query($konek_db, $tampil);
                        while($data = mysqli_fetch_array($sql)) {
                            echo "<input type='text' class='form-control' id='idgejala' readonly value='" . $data['idgejala'] . "'>";
                        }
                    ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="gejala">Gejala:</label>
                <div class="col-sm-10">
                    <?php
                        $sql = mysqli_query($konek_db, $tampil);
                        while($data = mysqli_fetch_array($sql)) {
                            echo "<input type='text' class='form-control' id='gejala' readonly value='" . $data['gejala'] . "'>";
                        }
                    ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="keterangan">Keterangan:</label>
                <div class="col-sm-10">
                    <?php
                        $sql = mysqli_query($konek_db, $tampil);
                        while($data = mysqli_fetch_array($sql)) {
                            echo "<textarea rows='4' class='form-control' id='keterangan' readonly>" . $data['keterangan'] . "</textarea>";
                        }
                    ?>
                </div>  
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form role="form" method="post" action="ceklogin.php">
                    <div class="form-group">
                        <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                    </div>
                    <button type="submit" id="submit" name="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
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
