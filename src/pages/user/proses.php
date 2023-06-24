<?php
$nama = $_POST['nama'];	//parameter dari form
$username = $_POST['username'];	//parameter dari form
$password = md5($_POST['password']);	//parameter dari form

mysqli_query($koneksi, "INSERT INTO tbl_user (nama_user,username,password) VALUES ('$nama', '$username','$password')");
// mengalihkan kehalaman index.php
header('location:?page=user');
