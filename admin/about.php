<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
  
<div class="container-fluid text-center">    
  <div class="row content">
  </div>
</div>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <form role="form" method="post" action="ceklogin.php">
            <div class="form-group" method="post">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
            </div>
            <div class="form-group" method="post">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
              <button type="submit" id="submit" nama="submit" class="btn btn-primary btn-block" method="post"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
      </div>
    </div>
  </div> 
<footer class="container-fluid text-center">
  <p></p>
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
