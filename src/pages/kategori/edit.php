<?php
include "config/koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tbl_kategori WHERE id_kategori = '$id'");
$edit = mysqli_fetch_array($data);
?>

<div class="content-wrapper pt-4">
  <div class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="card">
            <div class="card-header">
              <h2 class="text-center">Edit Data Kategori</h2>
            </div>
            <div class="card-body">
              <form method="post" action="?page=kategori_update">
                <input type="hidden" value="<?= $edit['id_kategori']?>" name="id" readonly="">
                <div class="form-group">
                  <label for="inputNama">Nama Kategori</label>
                  <input type="text" class="form-control" id="inputNama" value="<?= $edit['nama_kategori']?>"
                    name="nama">
                </div>
                <div class="form-group">
                  <div class="col-sm-12 text-right justify-content-right">
                    <input type="submit" value="Update" class="btn btn-primary">
                    <a href="?page=kategori" class="btn btn-danger">Kembali</a>
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