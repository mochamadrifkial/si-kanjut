<?php
    require_once("database.php");
    $id=$_POST['id'];
    $tgl_peminjaman=$_POST['tgl_peminjaman'];
    $tgl_kembali=$_POST['tgl_kembali'];
    $no_identitas=$_POST['no_identitas'];
    $kode_barang=$_POST['kode_barang'];
    $jumlah=$_POST['jumlah'];
    $keperluan=$_POST['keperluan'];
    $status=$_POST['status'];
    $id_login=$_POST['id_login'];
    $sql2=update("barang",$id, $kodeBrg, $namaBrg, $kategori, $merk, $jumlah);
    if ($sql2) {
        header("location:peminjaman.php");
    }
    
?>