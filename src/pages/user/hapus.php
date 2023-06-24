<?php

	$id = $_GET['id'];
	mysqli_query($koneksi,"DELETE FROM tbl_user WHERE id_user = '$id'");
	header('location:?page=user')
?>