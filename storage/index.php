<?php
include "function/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Connect To CSS-->
    <link rel="stylesheet" href="asetts/css/style-index.css" >

    <!--Shortcut Icon-->
    <link rel="shortcut icon" href="asetts/image/new_logo_V3-removebg-preview.png" type="image/png">

    <!--Tittle Name-->
    <title>My Storage (View Data)</title>

    <!--Connect To Bootstrap 1-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
     <!--Connect To Bootstrap 2-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!--Connect To Bootstrap 3-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  

</head>
<body>
<!--Logo kanan atas-->
<img class="logo" src="asetts/image/new_logo_V3-removebg-preview.png" alt="logo Storage.com">

     <div class="banner">
        <!--Text Judul 1-->
            <p>Storage</p>
     </div>

     <!--Text Judul 2-->
     <p class="judul2">.com</p>

      <!--Text Slogan-->
     <p class="slogan">"Providing Logistics Storage For All Over The World"</p>
</div>
        <div>
                    <center>
                        <table class="table table-dark table-striped">
                        <tr>  
                        <td>Kode Barang</td>
                        <td>Asal Barang</td>
                        <td>Tujuan Barang</td>
                        <td>Tanggal Masuk</td>
                        <td>Tanggal Keluar</td>
                        <td>Status Barang</td>
                        <td>Action</td>
                        </tr>

                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM tbl_gudang");
                        while($row = mysqli_fetch_array($sql)){
                        ?>

        <tr>
            <td><?= $row['kode_barang']?></td>
            <td><?= $row['asal_barang']?></td>
            <td><?= $row['tujuan_barang']?></td>
            <td><?= $row['tanggal_masuk']?></td>
            <td><?= $row['tanggal_keluar']?></td>
            <td><?= $row['status_barang']?></td>
        <td>
            <a href="ubah.php?kode_barang=<?= $row['kode_barang']?>">Edit</a>
            <a href="function/delete.php ?kode_barang=<?= $row['kode_barang']?>" 
                onclick="return confirm ('Apakah anda ingin menghapus data?')">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
        </table>
    </center>
    </div>
    <!--Button Back-->
        <center>
        <a href="main.php"><button class="button">Kembali</button></a>
        </center>



         <!--Connect To Bootstrap 1-->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <!--Connect To Bootstrap 2-->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <!--Connect To Bootstrap 3-->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>   