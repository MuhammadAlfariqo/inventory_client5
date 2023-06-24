<?php
session_start();
if (isset($_SESSION['username'])) {
	header('location:../index.php');
}
include "../config/koneksi.php";
$username = "";
$password = "";
$err = "";

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == '' or $password == '') {
		$err .= "<li>Masukkan Username dan Password !</li>";
	}
	if (empty($err)) {
		$sql1 = "SELECT * FROM tbl_user WHERE username = '$username'";
		$s1 = mysqli_query($koneksi, $sql1);
		$r1 = mysqli_fetch_array($s1);
		if ($r1['password'] != md5($password)) {
			$err .= "<li>Password Anda Salah !</li>";
		}
	}
	if (empty($err)) {
		$_SESSION['username'] = $username;
		header('location:../index.php');
	}
}
?>

<!DOCTYPE html>
<html>

<head>
  <title></title>
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../assets/plugins/toastr/toastr.min.css">
  <style type="text/css">
  body {
    background-image: url(img/bck.jfif);
    background-repeat: repeat-y;
    background-size: 1350px;
  }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            <h2 class="text-center font-weight-bold">LOGIN</h2>
          </div>
          <div class="card-body">
            <form action="" method="post">
              <?php
					if ($err) {
						echo "<ul>$err</ul>";
					}
					?>
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <input type="submit" name="login" value="Login" class="btn btn-block btn-primary">
                </div>
              </div>
            </form>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery -->
  <script src="../assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script>
  $(function() {
    $('.swalDefaultSuccess').click(function() {
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Login Berhasil',
        showConfirmButton: false,
        timer: 150000
      });
    });
  });
  </script>

</body>

</html>