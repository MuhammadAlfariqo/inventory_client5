<?php
include "config/koneksi.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM tbl_barang WHERE id_barang = '$id'";
} else {
  $query = "SELECT * FROM tbl_barang ORDER BY nama_barang ASC";
}

$result = mysqli_query($koneksi, $query);
?>

<div class="content-wrapper pt-4">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h2 class="text-center">Ambil Barang</h2>
            </div>
            <div class="card-body">
              <form method="post" action="?page=proses_ambil">
                <div class="form-group">
                  <label for="barang">Nama Barang</label>
                  <select name="barang" class="form-control">
                    <?php if (mysqli_num_rows($result) > 1) : ?>
                    <?php foreach ($result as $row) : ?>
                    <option value="<?= $row['id_barang']; ?>"><?= $row['nama_barang']; ?></option>
                    <?php endforeach; ?>
                    <?php else : $data = mysqli_fetch_assoc($result) ?>
                    <option value="<?= $data['id_barang']; ?>"><?= $data['nama_barang']; ?></option>
                    <?php endif; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputPassword3">Jumlah Diambil</label>
                  <input type="number" name="jumlah_diambil" class="form-control" id="inputPassword3">
                </div>
                <div class="form-group justify-content-right text-right">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Ambil</button>
                    <a href="index.php?page=barang" class="btn btn-danger">Kembali</a>
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