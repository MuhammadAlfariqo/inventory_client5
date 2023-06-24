<?php

	$id = $_GET['id'];
	mysqli_query($koneksi,"DELETE FROM tbl_transaksi WHERE id_transaksi = '$id'");
	header('location:?page=transaksi')
?>