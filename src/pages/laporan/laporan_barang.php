<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Halaman Laporan Data Barang</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <br>
              <div class="container-fluid">
                <form method="post" action="">
                  <div class="form-group row">
                    <div class="col-md-4">
                      <label for="tgl_mulai">Tanggal Mulai</label>
                      <input type="date" name="tgl1" class="form-control" id="tgl_mulai">
                    </div>
                    <div class="col-md-4">
                      <label for="tanggal_selesai">Tanggal Selesai</label>
                      <input type="date" name="tgl2" class="form-control" id="tanggal_selesai">
                    </div>
                    <div class="col-md-4 d-flex align-items-end">
                      <button type="submit" name="cari" class="btn btn-success px-4">Cari</button>
                    </div>
                  </div>
                </form>
              </div>
              <table id="example1" class="table table-hover">
                <thead>
                  <tr class="bg-light">
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Tanggal Dibuat</th>
                    <th>Stok</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include "config/koneksi.php";
                  if (isset($_POST['cari'])) {
                    $tanggal1 = $_POST['tgl1'];
                    $tanggal2 = $_POST['tgl2'];
                    $query = "SELECT * FROM tbl_barang INNER JOIN tbl_kategori ON tbl_barang.id_kategori = tbl_kategori.id_kategori WHERE tgl_create BETWEEN '$tanggal1' AND '$tanggal2'";
                  } else {
                    $query = "SELECT * FROM tbl_barang INNER JOIN tbl_kategori ON tbl_barang.id_kategori = tbl_kategori.id_kategori";
                  }

                  //  mysqli_query untuk eksekusi
                  $tampil = mysqli_query($koneksi, $query);
                  $no = 1;
                  while ($data = mysqli_fetch_assoc($tampil)) { ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $data['nama_barang'] ?></td>
                    <td><?= $data['nama_kategori'] ?></td>
                    <td>Rp <?= number_format($data['harga']) ?></td>
                    <td><?= $data['tgl_create'] ?></td>
                    <td><?= $data['stok'] ?></td>
                    <td class="text-center">
                      <a class="btn btn-warning text-white"
                        href="index.php?page=barang_edit&id=<?= $data['id_barang'] ?>"><i
                          class="fas fa-pen-square fa-lg"></i></a>
                      <a class="btn bg-danger" href="index.php?page=barang_hapus&id=<?= $data['id_barang'] ?>"
                        onclick="alert('Yakin mau dihapus?')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>

                  <?php
                    $no++;
                  }
                  ?>
                </tbody>
              </table><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>