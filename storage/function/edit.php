<?php
include "config.php";

$kode_barang = $_GET['kode_barang'];
$asal_barang = $_POST['asal_barang'];
$tujuan_barang = $_POST['tujuan_barang'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$tanggal_keluar = $_POST['tanggal_keluar'];
$status_barang = $_POST['status_barang']; 

$sql = mysqli_query ($conn, "UPDATE tbl_gudang SET
asal_barang = '$asal_barang',
tujuan_barang = '$tujuan_barang',
tanggal_masuk = '$tanggal_masuk',
tanggal_keluar = '$tanggal_keluar',
status_barang = '$status_barang'
WHERE kode_barang = '$kode_barang';
");
if ($sql) {
    header("Location: ../index.php?msg=berhasil");
} else {
    header("Location: ../ubah.php?kode_barang=$kode_barang&msg=gagal");
}
?>