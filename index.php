<?php
ob_start();
?>


<!DOCTYPE html>
<html>

<head>
  <title>Inventori</title>
  <link rel="icon" href="assets/img/logo-inventori.png" sizes="48x48" type="image/png">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="asssets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="asssets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="asssets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="src/style.css">
</head>

<body class="sidebar-mini">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item-log">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
      </a>
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#">ErZa? NaQo? Fix this</a>

          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="fas fa-tachometer-alt"></i>
                <p>
                  Home
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?page=user" class="nav-link">
                <i class="fas fa-users-cog"></i>
                <p>
                  User
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?page=barang" class="nav-link">
                <i class="fas fa-box-open"></i>
                <p>
                  Data Barang
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=kategori" class="nav-link">
                <i class="fas fa-sitemap"></i>
                <p>
                  Kategori
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=lokasi" class="nav-link">
                <i class="fas fa-map-marker-alt"></i>
                <p>
                  Lokasi
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=satuan" class="nav-link">
                <i class="fas fa-balance-scale"></i>
                <p>
                  Satuan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=transaksi" class="nav-link">
                <i class="fas fa-handshake"></i>
                <p>
                  Transaksi
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-file-alt"></i>
                <p>
                  Laporan
                </p>
                <i class="right fas fa-angle-left"></i>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="?page=laporan_user" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Laporan Data User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="?page=laporan_barang" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Laporan Data Barang</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="?page=laporan_transaksi" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Laporan Transaksi</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="auth/logout.php" class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
                <p>
                  Keluar
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.sidebar-menu -->
    </aside>
    <!-- <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a> -->
    <?php
    include "config/koneksi.php";
    ?>

    <?php

    if (isset($_GET['page'])) {

      $page = $_GET['page'];

      switch ($page) {
        case 'user':
          include "src/pages/user/view.php";
          break;
        case 'user_add':
          include "src/pages/user/form.php";
          break;
        case 'user_proses':
          include "src/pages/user/proses.php";
          break;
        case 'user_edit':
          include "src/pages/user/edit.php";
          break;
        case 'user_update':
          include "src/pages/user/update.php";
          break;
        case 'user_hapus':
          include "src/pages/user/hapus.php";
          break;



        case 'kategori':
          include "src/pages/kategori/view.php";
          break;
        case 'kategori_add':
          include "src/pages/kategori/form.php";
          break;
        case 'kategori_proses':
          include "src/pages/kategori/proses.php";
          break;
        case 'kategori_edit':
          include "src/pages/kategori/edit.php";
          break;
        case 'kategori_update':
          include "src/pages/kategori/update.php";
          break;
        case 'kategori_hapus':
          include "src/pages/kategori/hapus.php";
          break;


        case 'lokasi':
          include "src/pages/lokasi/view.php";
          break;
        case 'lokasi_add':
          include "src/pages/lokasi/form.php";
          break;
        case 'lokasi_proses':
          include "src/pages/lokasi/proses.php";
          break;
        case 'lokasi_edit':
          include "src/pages/lokasi/edit.php";
          break;
        case 'lokasi_update':
          include "src/pages/lokasi/update.php";
          break;
        case 'lokasi_hapus':
          include "src/pages/lokasi/hapus.php";
          break;


        case 'barang':
          include "src/pages/barang/view.php";
          break;
        case 'barang_add':
          include "src/pages/barang/form.php";
          break;
        case 'barang_proses':
          include "src/pages/barang/proses.php";
          break;
        case 'barang_edit':
          include "src/pages/barang/edit.php";
          break;
        case 'barang_update':
          include "src/pages/barang/update.php";
          break;
        case 'barang_hapus':
          include "src/pages/barang/hapus.php";
          break;
        case 'barang_ambil':
          include "src/pages/barang/ambil.php";
          break;
        case 'proses_ambil':
          include "src/pages/barang/proses_ambil.php";
          break;
        case 'barang_laporan':
          include "src/pages/barang/laporan.php";
          break;



        case 'transaksi':
          include "src/pages/transaksi/view.php";
          break;
        case 'transaksi_add':
          include "src/pages/transaksi/form.php";
          break;
        case 'transaksi_proses':
          include "src/pages/transaksi/proses.php";
          break;
        case 'transaksi_edit':
          include "src/pages/transaksi/edit.php";
          break;
        case 'transaksi_update':
          include "src/pages/transaksi/update.php";
          break;
        case 'transaksi_hapus':
          include "src/pages/transaksi/hapus.php";
          break;
        case 'laporan_user';
          include "src/pages/laporan/laporan_user.php";
          break;
        case 'laporan_barang';
          include "src/pages/laporan/laporan_barang.php";
          break;
        case 'laporan_transaksi';
          include "src/pages/laporan/laporan_transaksi.php";
          break;

        case 'satuan':
          include "src/pages/satuan/view.php";
          break;

        default:
          include "src/pages/satuan/notfound.php";
          break;
      }
    } else {
      include "src/pages/home.php";
    }

    ?>
  </div>
  <!-- jQuery -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="assets/plugins/jszip/jszip.min.js"></script>
  <script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/dist/js/adminlte.js"></script>



  <script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $("#example11").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example11_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  </script>
</body>

</html>