<!-- <?php
require_once('database.php');
$note="Select * from note";
$data = tampildata("Select * from peminjaman");
$nomor = 0;
?> -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <a href="data_barang.php"></a>
    <!-- <a href="edit.php"></a> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Inventaris</title>
</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-secondary text-warning bg-light">
  <div class="container-fluid">
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
      <h class="font-weight-bold">Inventaris Barang</h>
  </div>
</nav>  
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="font-weight-bold nav-link active text-dark" aria-current="page" href="home.php">Home</a>
        <a class="font-weight-bold nav-link text-dark" href="peminjaman.php">Peminjaman </a>
        <a class="font-weight-bold nav-link text-dark" href="data_barang.php">Data</a>
      </div>
    </div>
  </div>
</nav>

    <div class="container-fluid jumbotron">
        <h1 class="text-center bg-light text-dark font-italic">peminjaman
        </h1>
        <table class="text-center table grid table-light">
            <thead class="thead-dark">
                <tr class="font-weight-bold">
                    <th scope="col">id</th>
                    <th scope="col">tgl_peminjaman</th>
                    <th scope="col">tgl_kembali</th>
                    <th scope="col">no_identitas</th>
                    <th scope="col">kode_barang</th>
                    <th scope="col">jumlah</th>
                    <th scope="col">Keperluan</th>
                    <th scope="col">status</th>
                    <th scope="col">id_login</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $laboratorium): ?>
                    <tr>
                        <th scope="row">
                            <?php echo "$laboratorium[id]"; ?>
                        </th>
                        <td>
                            <?php echo "$laboratorium[tgl_pinjam]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[tgl_kembali]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[no_identitas]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[kode_barang]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[jumlah]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[keperluan]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[status]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[id_login]"; ?>
                        </td>
                        <td>
                            <?php echo "<a href='edit.php?kode=$laboratorium[id]'>Edit</a> | <a href= 'delete.php?kode=$laboratorium[id]'>Delete</a>"; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
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

