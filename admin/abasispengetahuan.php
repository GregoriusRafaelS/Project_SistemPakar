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
    }
    .checkbox-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
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
                    <a class="nav-link" href="gejala.php">CRUD Gejala</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link active" href="basispengetahuan.php">CRUD Basis Pengetahuan</a>
                </li>
            </ul>

            <form class="form-inline ml-auto" role="search">
                <a class="btn btn-outline-success" id="myBtn" href="logout.php">Logout</a>
            </form>
        </div>
    </div>
</nav>

<div class="container text-center content-wrapper">    
  <div class="row justify-content-center">
    <div class="col-sm-8 text-left"> 
        <h2 class="text-center">KEPUTUSAN</h2>
        <form id="form1" name="form1" method="post" action="abasispengetahuan.php">
        </form>
        <br>
        <form id="form1" name="form1" method="post">
            <div class="form-group">
                <label for="sel1">Penyakit</label>            
                <select required class="form-control" name="penyakit">
                    <option value="">Penyakit</option>
                    <?php 
                    $tampil="SELECT * FROM penyakit";
                    $query1= mysqli_query($konek_db,$tampil);
                    while($hasil=mysqli_fetch_array($query1)){  
                        echo "<option value='".$hasil['namapenyakit']."'>".$hasil['idpenyakit']." ".$hasil['namapenyakit']."</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="sel2">GEJALA</label>
                <div class="checkbox-grid">
                    <?php 
                    $tampil="SELECT * FROM gejala";
                    $query= mysqli_query($konek_db,$tampil);
                    while($hasil=mysqli_fetch_array($query)){  
                        echo "<div><input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."</div>";
                    }
                    ?>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php
            if(isset($_POST['submit'])){
                error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                $penyakit= $_POST['penyakit'];
                $gejala = $_POST['gejala'];
                $jumlah_dipilih = count($gejala);

                if ($jumlah_dipilih == 0){
                    echo '<script>alert("Pilih gejala..!!")</script>';
                    return false;
                }

                for($x=0; $x<$jumlah_dipilih; $x++){
                    $hasil= mysqli_query($konek_db, "INSERT INTO basispengetahuan (namapenyakit, gejala) VALUES ('$penyakit','$gejala[$x]')");
                }
                echo '<meta http-equiv="refresh" content="0;url=basispengetahuan.php">';
                exit();
            }
            ?>
        </form>
        <br>
    </div>
  </div>
</div>

<footer class="bg-dark text-white text-center py-3 mt-auto">
  <p>&copy; 2024 Sistem Pakar. All rights reserved.</p>
</footer>

</body>
</html>
