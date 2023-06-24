<?php

$nama = $_POST['nama'];	//parameter dari form
$harga = $_POST['harga'];	//parameter dari form
$kategori = $_POST['kategori'];	//parameter dari form
$stok = $_POST['stok'];	//parameter dari form
$lokasi = $_POST['lokasi'];

mysqli_query($koneksi, "INSERT INTO tbl_barang (nama_barang,harga,id_kategori,stok,id_lokasi)
							VALUES ('$nama','$harga','$kategori','$stok','$lokasi')");
// mengalihkan kehalaman index.php 
header('location:?page=barang');
