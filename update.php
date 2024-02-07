<?php
    require_once('koneksi.php');
    $id=$_POST ['id'];
    $namabarang=$_POST ['namabarang'];
    $tanggal=$_POST['tanggal'];
    $merk=$_POST['merk'];
    $harga=$_POST['harga'];
    $jumlah=$_POST['jumlah'];
    $keterangan=$_POST['keterangan'];

    mysqli_query($konn,"update barang set namabarang='$namabarang',tanggal='$tanggal',merk='$merk',harga='$harga',jumlah='$jumlah', keterangan='$keterangan' where id =$id");
    header("location:barang.php");
?>