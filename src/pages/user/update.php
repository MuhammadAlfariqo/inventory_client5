<?php

	$id = $_POST['id'];	//parameter dari form
	$nama = $_POST['nama'];	//parameter dari form
	$username = $_POST['username'];	//parameter dari form
	$password = md5($_POST['password']);	//parameter dari form

	if (empty($password)) {
		mysqli_query($koneksi, "UPDATE tbl_user SET nama_user= '$nama', 
													username= '$username' 
												WHERE id_user = '$id'");
	}
	else{
		mysqli_query($koneksi, "UPDATE tbl_user SET nama_user='$nama', 
													username='$username',
													password='$password' 
												WHERE id_user = '$id'");
	}



	

	// mengalihkan kehalaman index.php
	header('location:?page=user')
	
?>