<?php
    require_once('koneksi.php');
    $idx=$_GET['id'];
    $data=edit("barang",$idx);
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
  <?php include("nav.php")?>
  <div class= "container">

  <h1>Ubah Data Barang</h1>
  <hr>
  <?php while($barang=mysqli_fetch_array($data)):?>
<form action = "update.php" method = "post" >

    <div class="form-group>
      <label for="namabarang">Nama Barang</label>
      <input type='hidden'name='id' value="<?php echo "$barang[id]"; ?>">
      <input type='text' class='form-control' name='namabarang' value="<?php echo "$barang[namabarang]"; ?>">
    </div>
    <div class="form-group">
      <label for="tanggal">Tanggal</label>
      <input type="date" class="form-control" name="tanggal" value="<?php echo "$barang[tanggal]"; ?>">
    </div>

  <div class="form-group">
    <label for="merk">Merk</label>
    <input type="text" class="form-control" name="merk" value="<?php echo "$barang[merk]"; ?>">
  </div>
  <div class="form-group">
    <label for="harga">Harga</label>
    <input type="text" class="form-control" name="harga" value="<?php echo "$barang[harga]"; ?>" >
  </div>

    <div class="form-group">
      <label for="jumlah">Jumlah</label>
      <input type="text" class="form-control" name="jumlah" value="<?php echo "$barang[jumlah]"; ?>">
    </div>

    <div class="form-group">
      <label for="keterangan">Keterangan</label>
      <input type="text" class="form-control" name="keterangan" value="<?php echo "$barang[keterangan]"; ?>">
    </div>
   
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php endwhile ;?>
</div>

  </body>
</html>