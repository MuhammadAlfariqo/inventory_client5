<?php

	$id = $_POST['id'];	//parameter dari form
	$nama = $_POST['nama'];	//parameter dari form

	mysqli_query($koneksi, "UPDATE tbl_kategori SET nama_kategori= '$nama' 
												WHERE id_kategori = '$id'");


	// mengalihkan kehalaman index.php
	header('location:?page=kategori')
	
?>