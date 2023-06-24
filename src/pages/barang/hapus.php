<?php

	$id = $_GET['id'];
	mysqli_query($koneksi,"DELETE FROM tbl_barang WHERE id_barang = '$id'");
	header('location:?page=barang')
?>