<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Halaman Laporan Transaksi</h1>
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
                <form action="" method="post">
                  <div class="form-group row">
                    <div class="col-md-4">
                      <label for="tgl_mulai">Tanggal Mulai</label>
                      <input type="date" name="tanggal1" class="form-control" id="tgl_mulai">
                    </div>
                    <div class="col-md-4">
                      <label for="tanggal_selesai">Tanggal Selesai</label>
                      <input type="date" name="tanggal2" class="form-control" id="tanggal_selesai">
                    </div>
                    <div class="col-md-4 d-flex align-items-end">
                      <button type="submit" name="cari" class="btn btn-success px-4">Cari</button>
                    </div>
                  </div>
                </form>
              </div>
              <table class="table table-hover">
                <thead>
                  <tr class="bg-light">
                    <th>No</th>
                    <th>Id Transaksi</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Tanggal Dibuat</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include "config/koneksi.php";
                  if (isset($_POST['cari'])) {
                    $tanggal1 = $_POST['tanggal1'];
                    $tanggal2 = $_POST['tanggal2'];
                    $query = "SELECT * FROM tbl_transaksi INNER JOIN tbl_barang ON tbl_transaksi.id_barang = tbl_barang.id_barang WHERE tbl_transaksi.tgl_transaksi BETWEEN '$tanggal1' AND '$tanggal2'";
                  } else {
                    $query = "SELECT * FROM tbl_transaksi INNER JOIN tbl_barang ON tbl_transaksi.id_barang = tbl_barang.id_barang";
                  }

                  //  mysqli_query untuk eksekusi
                  $tampil = mysqli_query($koneksi, $query);
                  $no = 1;
                  while ($data = mysqli_fetch_assoc($tampil)) { ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $data['id_transaksi'] ?></td>
                    <td><?= $data['nama_barang'] ?></td>
                    <td>Rp <?= number_format($data['harga']) ?></td>
                    <td><?= $data['jumlah_diambil'] ?></td>
                    <td><?= $data['tgl_transaksi'] ?></td>
                    <td class="text-center">
                      <a class="btn btn-warning text-white"
                        href="index.php?page=transaksi_edit&id=<?= $data['id_transaksi'] ?>"><i
                          class="fas fa-pen-square fa-lg"></i></a>
                      <a class="btn bg-danger" href="index.php?page=transaksi_hapus&id=<?= $data['id_transaksi'] ?>"
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