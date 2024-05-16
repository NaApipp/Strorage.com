<?php
include "function/config.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Connect To CSS-->
    <link rel="stylesheet" href="asetts/css/style-tambah.css" >

    <!--Shortcut Icon-->
    <link rel="shortcut icon" href="asetts/image/new_logo_V3-removebg-preview.png" type="image/png">

    <!--Tittle Name-->
    <title>My Storage (Tambah Data)</title>

    <!--Bootstrap Form Group-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  

</head>
<body>
     <!--Logo kanan atas-->
     <img class="logo" src="asetts/image/new_logo_V3-removebg-preview.png" alt="logo Storage.com">
     <div class="banner">
        <!--Text Judul-->
        <p>Storage</p>
     </div>

     <!--Text Judul 2-->
     <p class="judul2">.com</p>

     <!--Text Slogan-->
     <p class="slogan">"Providing Logistics Storage For All Over The World"</p>
                    
     <center>
     <div class="container">

<form action="function/add.php" method= "POST">
  <!--Script Input Kode Barang-->
  <div class="form-group">
    <a><label for="kode_barang">Kode Barang:</label></a>
    <input type="text" class="form-control" id="kode_barang" placeholder="Enter Kode Barang" name="kode_barang">
  </div>
  <!--Script Input Asal Barang-->
  <div class="form-group">
    <label for="asal_barang">Asal Barang:</label>
    <input type="text" class="form-control" placeholder="Enter Asal Barang" name="asal_barang">
  </div>
  <!--Script Input Tujuan Barang-->
  <div class="form-group">
    <label for="tujuan_barang">Tujuan Barang:</label>
    <input type="text" class="form-control"  placeholder="Enter Tujuan Barang" name="tujuan_barang">
  </div>
  <!--Script Input Tanggal Masuk-->
  <div class="form-group">
    <label for="tanggal_masuk">Tanggal Masuk:</label>
    <input type="date" class="form-control"  placeholder="Enter Tanggal Masuk" name="tanggal_masuk">
  </div>
  <!--Script Input Tanggal Keluar Barang-->
  <div class="form-group">
    <label for="tanggal_keluar">Tanggal Keluar:</label>
    <input type="date" class="form-control"  placeholder="Enter Tanggal Keluar" name="tanggal_keluar">
  </div>
  <!--Script Input Statius Barang-->
  <div class="form-group">
    <label for="status_barang">Status Barang:</label>
    <input type="text" class="form-control"  placeholder="Enter Status Barang" name="status_barang">
  </div>
  <!--Button Add Data-->
  <button type="submit" class="btn btn-primary">Tambah Data</button>
</form>
<!--Button Back-->
</div>
    <a href="main.php"><button class="button">Kembali</button></a>
</div>
                    </center>

                    <!--Bootstrap Form Group-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>