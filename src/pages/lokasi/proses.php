<?php
	
	$nama = $_POST['nama'];	//parameter dari form

	mysqli_query($koneksi, "INSERT INTO tbl_lokasi (nama_lokasi)
		VALUES ('$nama')");
	// mengalihkan kehalaman index.php
	header('location:?page=lokasi')
	?>