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
  <style>
    .container-fluid {
      margin-top: 100px;
    }
    .table-actions {
      display: flex;
      justify-content: space-around;
    }
    .table-actions ion-icon {
      font-size: 1.5em;
      color: #007bff;
      cursor: pointer;
    }
    .icon-button {
      font-size: 1.5em;
      color: #007bff;
    }
    .icon-button:hover {
      color: #0056b3;
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
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-12 text-left"> 
      <h2 class="text-center">DAFTAR GEJALA</h2>
      <a href="ainputgejala.php" class="btn btn-primary mb-3">
        <ion-icon name="create-sharp"></ion-icon> Tambah Gejala
      </a>
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>NO</th>
              <th>ID Gejala</th>
              <th>Gejala</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $query = "SELECT * FROM gejala";
            $result = mysqli_query($konek_db, $query);   
            $id = 0;
            while ($data = mysqli_fetch_array($result)){  
              $id++; 
              echo "<tr>  
                      <td>{$id}</td>
                      <td>{$data[0]}</td>  
                      <td>{$data[1]}</td>  
                      <td class='table-actions'>
                        <a href=\"aeditgejala.php?id={$data[0]}\"><ion-icon name='create-outline'></ion-icon></a>
                        <a href=\"adeletegejala.php?id={$data[0]}\" onclick='return checkDelete()'><ion-icon name='trash-outline'></ion-icon></a>
                      </td>
                    </tr>";      
            }
          ?>  
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Yakin menghapus data ini?');
}
</script>

<footer class="bg-dark text-white text-center py-1">
    <p>&copy; 2024 Sistem Pakar. All rights reserved.</p>
</footer>

</body>
</html>
