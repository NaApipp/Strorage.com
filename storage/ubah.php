<?php
include "function/config.php";

$kode_barang = $_GET['kode_barang'];

$get_data = mysqli_query($conn, "SELECT * FROM tbl_gudang WHERE kode_barang='$kode_barang'");
$row_data = mysqli_fetch_array($get_data);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Shortcut Icon-->
    <link rel="shortcut icon" href="asetts/image/new_logo_V3-removebg-preview.png" type="image/png">

    <!--Connect To CSS-->
    <link rel="stylesheet" href="asetts/css/style-ubah.css">

    <!--Bootstrap 1(Form)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>My Storage (Edit Data)</title>
</head>
<body>
    <!--Logo kanan atas-->
    <img class="logo" src="asetts/image/new_logo_V3-removebg-preview.png" alt="logo Storage.com">   
     <div class="banner">
        <!--Text Judul-->
        <p>Storage</p><br>
        </div>
        <!--Text Judul 2-->
        <p class="judul2">.com</p>
        <!--Text Slogan-->
        <p class="slogan">"Providing Logistics Storage For All Over The World"</p>
    <br><br>
    <div class="container">
  <form action="function/edit.php?kode_barang=<?=$kode_barang?>" method="POST">
    <!--Script Update Kode Barang-->
    <div class="form-group">
      <label for="asal_barang">Asal Barang:</label>
      <input type="text" class="form-control"  placeholder="Enter Asal Baru" name="asal_barang" value="<?= $row_data['asal_barang']?>">
    </div>
    <!--Script Update Tujuan Barang-->
    <div class="form-group">
      <label for="tujuan_barang">Tujuan Barang:</label>
      <input type="text" class="form-control"  placeholder="Enter Tujuan Baru" name="tujuan_barang" value="<?= $row_data['tujuan_barang']?>">
    </div>
    <!--Script Update Tanggal Masuk Barang-->
    <div class="form-group">
      <label for="tanggal_masuk">Tanggal Masuk:</label>
      <input type="date" class="form-control"  placeholder="Enter Tujuan Baru" name="tanggal_masuk"  value="<?= $row_data['tanggal_masuk']?>">
    </div>
    <!--Script Update Tanggal Keluar Barang-->
    <div class="form-group">
      <label for="tanggal_keluar">Tanggal Keluar:</label>
      <input type="date" class="form-control"  placeholder="Enter Tujuan Baru" name="tanggal_keluar" value="<?= $row_data['tanggal_keluar']?>">
    </div>
    <!--Script Update Status Barang Barang-->
    <div class="form-group">
      <label for="status_barang">Status Barang:</label>
      <input type="text" class="form-control"  placeholder="Enter Status Baru" name="status_barang" value="<?= $row_data['status_barang']?>">
    </div>
    <br><br>
    <!--Button Update Data-->
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>