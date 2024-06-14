<?php
error_reporting(error_reporting() & ~E_NOTICE);
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
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
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

<div class="container-fluid my-5">
  <h2 class="text-center pb-3">Diagnosa Penyakit</h2>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form id="form1" name="form1" method="post" action="diagnosa.php">
        <div class="row">
        <?php 
        $tampil="select * from gejala";
        $query= mysqli_query($konek_db,$tampil);
        $col_count = 3; // Number of columns
        $current_col = 0;
        while($hasil=mysqli_fetch_array($query)){  
          if($current_col == 0) echo '<div class="col-md-4">';
          echo "<div class='form-check'>
                  <input class='form-check-input' type='checkbox' value='".$hasil['gejala']."' name='gejala[]' id='gejala".$hasil['idgejala']."' />
                  <label class='form-check-label' for='gejala".$hasil['idgejala']."'>".$hasil['gejala']."</label>
                </div>";
          $current_col++;
          if($current_col == $col_count){
            echo '</div>';
            $current_col = 0;
          }
        }
        if($current_col != 0) echo '</div>';
        ?>
        </div>
        <br>
        <button type="submit" name="submit" onclick="return checkDiagnosa()" class="btn btn-primary">Cek Penyakit</button>
        <br><br>
        <div class="panel panel-info">
          <div class="panel-heading">Hasil Diagnosa</div>
          <div class="panel-body">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Penyakit</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if(isset($_POST['submit'])){
                      $gejala = $_POST['gejala'];
                      $jumlah_dipilih = count($gejala);
                      if ($jumlah_dipilih==0){
                          echo "<script>alert('Gejala harus diceklist..!!')</script>";
                      } else {
                          $query = "SELECT * FROM tht_sistem_pakar.basispengetahuan where gejala IN (";
                          for($x=0; $x<$jumlah_dipilih; $x++){
                              $query .= "'".$gejala[$x]."', ";
                          }
                          $query = rtrim($query, ', ');
                          $query = $query.")";
                          $tampil = "select a.idpenyakit,a.namapenyakit,count(a.gejala) as gejalaA,count(b.gejala) as gejalaB from (
                              SELECT a.namapenyakit,a.gejala,b.idpenyakit FROM tht_sistem_pakar.basispengetahuan a 
                              left join tht_sistem_pakar.penyakit b on a.namapenyakit = b.namapenyakit
                          )a
                          left join (
                              $query
                          )B
                          ON a.namapenyakit = b.namapenyakit and a.gejala = b.gejala
                          group by a.namapenyakit,a.idpenyakit
                          having count(a.gejala) = count(b.gejala)";
                          $result = mysqli_query($konek_db, $tampil);
                          $num_rows = mysqli_num_rows($result);
                          if ($num_rows == 0) {
                              echo "<script>alert('Penyakit tidak ditemukan\\nSilahkan input ulang gejala anda !')</script>";
                          } else {
                              $no = 1;
                              while($hasil = mysqli_fetch_array($result)){
                                  echo "
                                  <tr>  
                                  <td>".$no."</td>
                                  <td>".$hasil['namapenyakit']."</td>  
                                  <td><a href=\"hasildiagnosa.php?id=".$hasil['idpenyakit']."\"><ion-icon name='search-outline'></ion-icon></a></td>
                                  </tr>";
                                  $no++;
                              }
                          }
                      }
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </form>
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
                <form method="post" action="../helper/ceklogin.php">
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


function checkDiagnosa(){
  return confirm('Apakah sudah benar gejalanya?');
}
</script>

</body>
</html>
