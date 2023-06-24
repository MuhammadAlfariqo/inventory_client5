<?php

$id = $_POST['id'];	//parameter dari form
$nama = $_POST['nama'];	//parameter dari form
$harga = $_POST['harga'];	//parameter dari form
$kategori = $_POST['kategori'];	//parameter dari form
$stok = $_POST['stok'];	//parameter dari form
$id_lokasi = $_POST['id_lokasi'];

if (empty($kategori)) {
	mysqli_query($koneksi, "UPDATE tbl_barang SET nama_barang= '$nama',
													harga = '$harga',
													id_kategori='$kategori',
													stok='$stok',
													id_lokasi = '$id_lokasi'
												WHERE  id_barang= '$id'");
} else {
	mysqli_query($koneksi, "UPDATE tbl_barang SET nama_barang='$nama',
													harga = '$harga',
													id_kategori='$kategori',
													stok='$stok',
													id_lokasi = '$id_lokasi'
												WHERE  id_barang= '$id'");
}


// mengalihkan kehalaman index.php
header('location:?page=barang');
