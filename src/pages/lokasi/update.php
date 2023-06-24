<?php

	$id = $_POST['id'];	//parameter dari form
	$nama = $_POST['nama'];	//parameter dari form

	mysqli_query($koneksi, "UPDATE tbl_lokasi SET nama_lokasi= '$nama' 
		WHERE id_lokasi = '$id'");


	// mengalihkan kehalaman index.php
	header('location:?page=lokasi')
	
	?>