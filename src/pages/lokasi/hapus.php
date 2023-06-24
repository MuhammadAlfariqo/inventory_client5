<?php

$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM tbl_lokasi WHERE id_lokasi = '$id'");
header('location:?page=lokasi')
?>