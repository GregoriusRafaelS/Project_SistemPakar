<?php
    include('../connection/koneksi.php');
    $query="DELETE from penyakit where idpenyakit='".$_GET['id']."'";
    mysqli_query($konek_db, $query);
    header("location:penyakit.php");
?>