<?php
include('../connection/koneksi.php');

// Mengambil parameter pencarian dari URL
$search = isset($_GET['search']) ? $_GET['search'] : '';
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
</head>
<body style="padding-top: 70px;">


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

<div class="container text-center">    
  <div class="row content">
    <div class="col-sm-12 text-left"> 
      <h2 class="text-center">DAFTAR GEJALA</h2>
      <!-- Form Pencarian -->
      <form class="form-inline mb-3" method="GET" action="daftargejala.php">
          <input class="form-control mr-sm-2" type="search" name="search" placeholder="Cari gejala" aria-label="Search" value="<?php echo htmlspecialchars($search); ?>">
          <button class="btn btn-outline-success" type="submit">Cari</button>
      </form>
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center">NO</th>
              <th>Gejala</th>
              <th class="text-center">Detail</th>
            </tr>
          </thead>
          <tbody>
          <?php
            // Query untuk mengambil gejala berdasarkan pencarian
            if ($search) {
                $query = "SELECT * FROM gejala WHERE gejala LIKE '%" . mysqli_real_escape_string($konek_db, $search) . "%'";
            } else {
                $query = "SELECT * FROM gejala";
            }
            $result = mysqli_query($konek_db, $query);   
            $id = 0;
            while ($data = mysqli_fetch_array($result)){  
              $id++; 
              echo "<tr>  
                      <td class='text-center'>{$id}</td>  
                      <td>{$data['gejala']}</td>  
                      <td class='table-actions text-center'>
                        <a href=\"detailgejala.php?id={$data['idgejala']}\"><ion-icon name='search-outline'></ion-icon></a>
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
</script>

</body>
</html>
