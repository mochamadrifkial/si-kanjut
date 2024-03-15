?>

<?php
$servername = "localhost";
$database = "sts_abi";
$username = "root";
$password = "";
$koneksi = mysqli_connect($servername, $username, $password, $database);
if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
function tampildata($kueri)
{
    global $koneksi;
    $hasil = mysqli_query($koneksi, $kueri);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }
    return $rows;
}

function inputdata($inputdata)
{
    global $koneksi;
    $sql = mysqli_query($koneksi, $inputdata);
    return $sql;
}
function Editdata($tablename,$id)
{
    global $koneksi;
    $hasil=mysqli_query($koneksi,"SELECT * from $tablename where id='$id'");
    return $hasil;
}

function update($table, $id, $kodeBrg, $namaBrg, $kategori, $merk, $jumlah)
{
    global $koneksi;
    $sql = "UPDATE $table SET kode_brg = '$kodeBrg', nama_brg = '$namaBrg', kategori = '$kategori', merk = '$merk', jumlah = '$jumlah' WHERE id = '$id'";
    $hasil=mysqli_query($koneksi,$sql);
    return $hasil;
}
function Delete($tablename,$id)
{
    global $koneksi;
    $hasil=mysqli_query($koneksi,"DELETE from $tablename where id='$id'");
    return $hasil;
}
?>

