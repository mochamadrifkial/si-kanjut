<?php

    require_once("database.php");
    if ($kode = $_GET['kode']) {
    $result = mysqli_query($koneksi,"DELETE FROM peminjaman WHERE id=$kode");
        header("location:peminjaman.php"); 
    }
?>