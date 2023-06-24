<?php
	$nama = $_POST['nama'];	//parameter dari form

	mysqli_query($koneksi, "INSERT INTO tbl_kategori (nama_kategori)
							VALUES ('$nama')");
	// mengalihkan kehalaman index.php
	header('location:?page=kategori')
?>