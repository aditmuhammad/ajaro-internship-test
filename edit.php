<?php
include("koneksi.php");

$kode		= $_POST['kode'];
$nama		= $_POST['nama'];
$deskripsi	= $_POST['deskripsi'];
$stok		= $_POST['stok'];
$harga		= $_POST['harga'];
$berat		= $_POST['berat'];

$data=mysql_query("update tb_barang set kode='$kode', nama='$nama', deskripsi='$deskripsi', stok='$stok', harga='$harga', berat='$berat' where kode='$kode'");
header("location:ui.php?");
?>