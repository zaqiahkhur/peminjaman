<?php
session_start();
if($_SESSION['status']<>"login"){
  header("location:login.php?msg=belum login");
}
require_once('koneksi.php');
$data =tampil_data("barang");
$nomor=1;
?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>barang</title>
  </head>
  <body>
<?php
  include('nav.php');
?>
<div class="container">
<h1>Barang</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Merk</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Aksi</th>
    

    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $brg) :?>
      <?php $no=$nomor++;?>
    <tr>
      <th scope="row"><?php echo "$no"?></th>
      <td><?php echo"$brg[namabarang]";?></td>
      <td><?php echo"$brg[tanggal]";?></td>
      <td><?php echo"$brg[merk]";?></td>
      <td><?php echo"$brg[harga]";?></td>
      <td><?php echo"$brg[jumlah]";?></td>
      <td><?php echo"$brg[keterangan]";?></td>
      <td><?php echo "<a href='edit.php?id=$brg[id]' class='btn btn-sm btn-warning' >Edit</a>"; ?> 
      <?php echo "<a href='delete.php?id=$brg[id]' class='btn btn-sm btn-danger'>Delete</a>"; ?> 
    </td>
      
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
</div>

<script language="JavaScript" type="text/javascript">
    function hapusData(id){
        if(confirm("Apakah anda yakin akan menghapus data ini?")){
            window.location.href ='delete.php?id=' + id;
        }
    }
    
</script>
  </body>
</html>