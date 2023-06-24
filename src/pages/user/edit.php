<?php
include "config/koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE id_user = '$id'");
$edit = mysqli_fetch_array($data);
?>

<div class="content-wrapper pt-4">
  <div class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="card">
            <div class="card-header">
              <h2 class="text-center">Edit Data User</h2>
            </div>
            <div class="card-body">
              <form method="post" action="?page=user_update">
                <div class="form-group">
                  <input type="hidden" value="<?= $edit['id_user']?>" name="id" readonly="">
                  <label for="inputNama">Nama User</label>
                  <input type="text" class="form-control" value="<?= $edit['nama_user']?>" name="nama">
                </div>
                <div class="form-group">
                  <label for="inputUsername">Username</label>
                  <input type="text" class="form-control" value="<?= $edit['username']?>" name="username">
                </div>
                <div class="form-group">
                  <label for="inputPassword3">Password</label>
                  <input type="password" class="form-control" id="inputPassword3" name="password">
                </div>
                <div class="form-group mt-5 row text-right justify-content-end">
                  <div class="col-sm-10">
                    <input type="submit" value="Update" class="btn btn-primary">
                    <a href="?page=user" class="btn btn-danger">Kembali</a>
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