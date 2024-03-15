<?php 
 require_once("database.php");
    $id = $_POST['Nomor'];
    $tgl_peminjaman = $_POST['Tanggal'];
    $tgl_kembali = $_POST['Kode_Barang'];
    $no_identitas = $_POST['Nama_Barang'];
    $kode_barang = $_POST['UraianMerk_Barang'];
    $jumlah = $_POST['Distributor'];
    $keperluan= $_POST['Kwantitas'];
    $status = $_POST['Tahun'];
    $id_login= $_POST['Asal_Barang'];

 
$simpan=inputdata("INSERT INTO laboratorium_robotika (id,tgl_peminjaman,tgl_kembali,no_identitas,kode_barang,jumlah,keperluan,status,id_login,) VALUES ('$no','$tgl','$kode_brg','$nm_brg','$merk_brg','$dis','$kwan','$thn','$asl_brg','$perolehan','$kon_brg','$hrg','$xket')");
if($simpan) {
header("location:peminjaman.php");
}
?>