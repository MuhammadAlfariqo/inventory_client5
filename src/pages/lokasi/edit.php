<?php
include "config/koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tbl_lokasi WHERE id_lokasi = '$id'");
$edit = mysqli_fetch_array($data);
?>

<div class="content-wrapper pt-4">
  <div class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="card">
            <div class="card-header">
              <h2 class="text-center">Edit Data Lokasi</h2>
            </div>
            <div class="card-body">
              <form method="post" action="?page=lokasi_update">
                <input type="hidden" value="<?= $edit['id_lokasi']?>" name="id" readonly="">
                <div class="form-group">
                  <label for="input_lokasi">Nama Lokasi</label>
                  <input type="text" class="form-control" id="input_lokasi" value="<?= $edit['nama_lokasi']?>"
                    name="nama">
                </div>
                <div class="form-group justify-content-right text-right">
                  <div class="col-sm-12">
                    <input type="submit" value="Update" class="btn btn-primary">
                    <a href="?page=lokasi" class="btn btn-danger">Kembali</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>