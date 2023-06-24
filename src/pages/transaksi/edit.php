<?php
include "config/koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tbl_transaksi WHERE id_transaksi = '$id'");

$edit = mysqli_fetch_array($data);
?>

<div class="content-wrapper pt-4">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h2 class="text-center">Edit Data Transaksi</h2>
            </div>
            <div class="card-body">
              <form method="post" action="?page=transaksi_update">
                <input type="hidden" value="<?= $edit['id_transaksi']?>" name="id" readonly="">
                <div class="form-group">
                  <label for="getBarang">Nama Barang</label>
                  <select name="barang" id="" class="form-control">
                    <option value="" name="barang" required="">Pilih Barang</option>
                    <?php
												$barang = mysqli_query($koneksi,"SELECT * FROM tbl_barang");

												while ($data = mysqli_fetch_array($barang)) { ?>
                    <option value="<?=$data['id_barang']?>">
                      <?=$data['nama_barang']?>
                    </option>
                    <?php
												}
												?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="ambil">Jumlah Diambil</label>
                  <input type="text" class="form-control" id="ambil" name="stok" value="<?= $edit['jumlah_diambil']; ?>"
                    required>
                </div>
                <div class="form-group justify-content-right text-right">
                  <div class="col-sm-12">
                    <a href="?page=transaksi" class="btn btn-danger">Kembali</a>
                    <input type="submit" value="Update" class="btn btn-primary">
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