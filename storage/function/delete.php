<?php
include "config.php";

$kode_barang = $_GET['kode_barang'];
$sql = mysqli_query($conn, "DELETE FROM tbl_gudang WHERE kode_barang = '$kode_barang'");

if ($sql) {
    header("Location: ../index.php?msg=berhasil");
} else {
    header("Location: ../index.php?msg=gagal");
}
?>