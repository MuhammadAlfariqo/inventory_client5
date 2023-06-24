<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Data Barang</h1>
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
              <form method="post" action="?page=barang_proses">
                <div class="form-group">
                  <label for="inputNama">Nama Barang</label>
                  <input type="text" class="form-control" name="nama" id="inputNama">
                </div>
                <div class="form-group">
                  <label for="inputHarga">Harga</label>
                  <input type="text" class="form-control" name="harga" id="inputHarga">
                </div>
                <div class="form-group">
                  <label for="kategori">Kategori</label>
                  <select name="kategori" id="" class="form-control" name="kategori" required="">
                    <option value="">Pilih Kategori</option>
                    <?php
                      $kategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");

                      while ($data = mysqli_fetch_array($kategori)) { ?>
                    <option value="<?= $data['id_kategori'] ?>">
                      <?= $data['nama_kategori'] ?>
                    </option>
                    <?php
                      }
                      ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="lokasi">Lokasi</label>
                  <select name="lokasi" id="" required="" class="form-control">
                    <option value="">Pilih Lokasi</option>
                    <?php
                      $lokasi = mysqli_query($koneksi, "SELECT * FROM tbl_lokasi");

                      while ($res = mysqli_fetch_array($lokasi)) { ?>
                    <option value="<?= $res['id_lokasi'] ?>">
                      <?= $res['nama_lokasi'] ?>
                    </option>
                    <?php
                      }
                      ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="input_stok">Stok</label>
                  <input type="text" class="form-control" name="stok" id="input_stok">
                </div>
                <div class="form-group justify-content-right text-right">
                  <div class="col-sm-12">
                    <input type="submit" value="Proses" class="btn btn-primary">
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