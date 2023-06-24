<?php

	$nama = $_POST['nama'];	//parameter dari form
	$harga = $_POST['harga'];	//parameter dari form
	$kategori = $_POST['kategori'];	//parameter dari form
	$stok = $_POST['stok'];	//parameter dari form

	mysqli_query($koneksi, "INSERT INTO tbl_transaksi (nama_transaksi,harga,kategori,stok)
							VALUES ('$nama','$harga','$kategori','$stok')");
	// mengalihkan kehalaman index.php 
	header('location:?page=transaksi')
?>