<?php
    include 'config.php';

    $kode_barang = $_POST['kode_barang'];
    $asal_barang = $_POST['asal_barang'];
    $tujuan_barang = $_POST['tujuan_barang'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $tanggal_keluar = $_POST['tanggal_keluar'];
    $status_barang = $_POST['status_barang'];

    $sql = mysqli_query($conn, "INSERT INTO tbl_gudang (kode_barang, asal_barang, tujuan_barang, tanggal_masuk, tanggal_keluar, status_barang) 
                        VALUES ('$kode_barang', '$asal_barang', '$tujuan_barang', '$tanggal_masuk', '$tanggal_keluar', '$status_barang')");
                        if ($sql) {
                            header("Location: ../index.php?msg=berhasil");
                        } else {
                            header("Location: ../tambah.php?msg=gagal");

                        }

                       /* if ($sql) {
                            header("Location: ../index.php?msg=berhasil");
                        } else {
                            header("Location: ../index.php?msg=gagal");
                        }*/
?><!--  -->