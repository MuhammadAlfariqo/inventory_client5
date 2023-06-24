<?php

	$id = $_POST['id'];	//parameter dari form
	$nama = $_POST['nama'];	//parameter dari form
	$harga = $_POST['harga'];	//parameter dari form
	$kategori = $_POST['kategori'];	//parameter dari form
	$stok = $_POST['stok'];	//parameter dari form

	if (empty($kategori)) {
		mysqli_query($koneksi, "UPDATE tbl_transaksi SET nama_transaksi= '$nama',
													harga = '$harga',
													kategori='$kategori' 
												WHERE  id_transaksi= '$id'");
	}
	else{
		mysqli_query($koneksi, "UPDATE tbl_transaksi SET nama_transaksi='$nama',
													harga = '$harga',
													kategori='$kategori',
													stok='$stok' 
												WHERE  id_transaksi= '$id'");
	}


	// mengalihkan kehalaman index.php
	header('location:?page=transaksi')
	
?>