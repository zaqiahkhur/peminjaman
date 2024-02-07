<?php 
require_once('koneksi.php');
$namabarang=$_POST ['namabarang'];
$tanggal=$_POST['tanggal'];
$merk=$_POST['merk'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$keterangan=$_POST['keterangan']; 
$simpan=mysqli_query($konn,"insert into barang value(null,'$namabarang','$tanggal','$merk','$harga','$jumlah','$keterangan')");
if($simpan){
    header("location:barang.php");
}else{
    echo"input gagal";
}
?>