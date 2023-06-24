<?php
include "config/koneksi.php";
$get1 = mysqli_query($koneksi, "SELECT * FROM tbl_user");
$sum1 = mysqli_num_rows($get1);

$get2 = mysqli_query($koneksi, "SELECT * FROM tbl_barang");
$sum2 = mysqli_num_rows($get2);

$get3 = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
$sum3 = mysqli_num_rows($get3);

$get4 = mysqli_query($koneksi, "SELECT * FROM tbl_lokasi");
$sum4 = mysqli_num_rows($get4);

$get5 = mysqli_query($koneksi, "SELECT * FROM tbl_transaksi");
$sum5 = mysqli_num_rows($get5);
?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Aplikasi Inventori</h1>
        </div><!-- /.col -->

      </div><!-- /.row -->
      <br>
      <div class="row">
        <!-- user -->
        <div class="col-md-4 col-sm-6 col-12">
          <a href="?page=user" class="info-box bg-light py-4">
            <span class="info-box-icon"><i class="fas fa-users-cog"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Data User</span>
              <h2 class="info-box-number"><?= $sum1; ?></h2>
            </div>
            <!-- /.info-box-content -->
          </a>
          <!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-12">
          <a href="?page=barang" class="info-box bg-warning py-4">
            <span class="info-box-icon"><i class="fas fa-box-open"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Data Barang</span>
              <h2 class="info-box-number"><?= $sum2; ?></h2>
            </div>
            <!-- /.info-box-content -->
          </a>
          <!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-12">
          <a href="?page=kategori" class="info-box bg-primary py-4">
            <span class="info-box-icon"><i class="fas fa-sitemap"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Data Kategori</span>
              <h2 class="info-box-number"><?= $sum3; ?></h2>
            </div>
            <!-- /.info-box-content -->
          </a>
          <!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-12">
          <a href="?page=lokasi" class="info-box bg-success py-4">
            <span class="info-box-icon"><i class="fas fa-map-marker-alt"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Data Lokasi</span>
              <h2 class="info-box-number"><?= $sum4; ?></h2>
            </div>
            <!-- /.info-box-content -->
          </a>
          <!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-12">
          <a href="?page=user" class="info-box bg-dark py-4">
            <span class="info-box-icon"><i class="fas fa-balance-scale"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Data Satuan</span>
              <h2 class="info-box-number">x</h2>
            </div>
            <!-- /.info-box-content -->
          </a>
          <!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-12">
          <a href="?page=transaksi" class="info-box bg-danger py-4">
            <span class="info-box-icon"><i class="fas fa-handshake"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Data Transaksi</span>
              <h2 class="info-box-number"><?= $sum5; ?></h2>
            </div>
            <!-- /.info-box-content -->
          </a>
          <!-- /.info-box -->
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </div>
</div>