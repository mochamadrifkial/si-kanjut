<?php
  require_once("database.php");
  $data=Editdata("barang",$_GET['id']);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Insert Barang</title>
  </head>
  <body>
    <?php
      session_start();
      if($_SESSION['status']!="login"){
          header("location:login.php?msg=belum_login");   
      }else{
          
      }
      ?>
    <div class="container">
    <h1> Edit peminjam </h1>
    <?php while($barang= mysqli_fetch_array($data)): ?>
    <form action="update.php" method="post">
      <input type="hidden" class="form-control" name="id" value="<?= $barang['id'];?>">
  <div class="form-group">
    <label>Kode Barang</label>
    <input type="text" class="form-control" name="id">
  </div>
  <div class="form-group">
    <label>Nama Barang</label>
    <input type="text" class="form-control" name="tgl_peminjam">
  </div>
  <div class="form-group">
    <label>Kategori</label>
    <input type="text" class="form-control" name="tgl_kembali">
  </div>
  <div class="form-group">
    <label>Merk</label>
    <input type="text" class="form-control" name="no_identitas">
  </div>
  <div class="form-group">
    <label>Jumlah</label>
    <input type="text" class="form-control" name="kode_barang">
  </div>
  <div class="form-group">
    <label>Jumlah</label>
    <input type="text" class="form-control" name="jumlah">
  </div>
  <div class="form-group">
    <label>Jumlah</label>
    <input type="text" class="form-control" name="keperluan">
  </div>
  <div class="form-group">
    <label>Jumlah</label>
    <input type="text" class="form-control" name="status">
  </div>
  <div class="form-group">
    <label>Jumlah</label>
    <input type="text" class="form-control" name="id_login">
  </div>
  <button type="submit" name="update" class="btn btn-primary">Submit</button>
</form>
    <?php endwhile; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>