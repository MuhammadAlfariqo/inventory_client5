<?php
include "config/koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tbl_barang INNER JOIN tbl_kategori ON tbl_barang.id_kategori = tbl_kategori.id_kategori INNER JOIN tbl_lokasi ON tbl_barang.id_lokasi = tbl_lokasi.id_lokasi WHERE tbl_barang.id_barang = '$id'");
$edit = mysqli_fetch_assoc($data);
?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Data Barang</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form method="post" action="?page=barang_update">
                <input type="hidden" value="<?= $edit['id_barang'] ?>" name="id" readonly="">
                <div class="form-group">
                  <label for="inputNama">Nama Barang</label>
                  <input type="text" class="form-control" id="inputNama" value="<?= $edit['nama_barang'] ?>"
                    name="nama">
                </div>
                <div class="form-group">
                  <label for="inputHarga">Harga</label>
                  <input type="text" class="form-control" id="inputHarga" value="<?= $edit['harga'] ?>" name="harga">
                </div>
                <div class="form-group">
                  <label for="kategori">Kategori</label>
                  <select name="kategori" id="" required="" class="form-control">
                    <option value="<?= $edit['id_kategori']; ?>"><?= $edit['nama_kategori']; ?></option>
                    <?php
                      $querykategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                      foreach ($querykategori as $datakategori) :
                      ?>
                    <option value="<?= $datakategori['id_kategori']; ?>"><?= $datakategori['nama_kategori']; ?>
                    </option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="kategori">Lokasi</label>
                  <select name="id_lokasi" id="" required="" class="form-control">
                    <option value="<?= $edit['id_lokasi']; ?>"><?= $edit['nama_lokasi']; ?></option>
                    <?php
                      $querylokasi = mysqli_query($koneksi, "SELECT * FROM tbl_lokasi");
                      foreach ($querylokasi as $datalokasi) :
                      ?>
                    <option value="<?= $datalokasi['id_lokasi']; ?>"><?= $datalokasi['nama_lokasi']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="input_stok">Stok</label>
                  <input type="text" class="form-control" id="input_stok" value="<?= $edit['stok'] ?>" name="stok">
                </div>
                <div class="form-group justify-content-right text-right">
                  <div class="col-sm-12">
                    <input type="submit" value="Update" class="btn btn-primary">
                    <a href="?page=barang" class="btn btn-danger">Kembali</a>
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