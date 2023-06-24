<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Halaman Transaksi</h1>
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
              <a class="btn btn-info rounded-0" href="?page=barang_ambil">Tambah Transaksi</a>
              <br><br>
              <table id="example1" class="table table-hover">
                <thead>
                  <tr class="bg-light">
                    <th>No</th>
                    <th>Id transaksi</th>
                    <th>Tanggal</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Jumlah Diambil</th>
                    <th>Stok</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $tampil = mysqli_query($koneksi, "SELECT trans.*, brg.nama_barang, brg.harga, brg.stok FROM tbl_transaksi trans LEFT JOIN tbl_barang brg ON trans.id_barang=brg.id_barang");

                  $no = 1;
                  while ($data = mysqli_fetch_array($tampil)) { ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $data['id_transaksi'] ?></td>
                    <td><?= $data['tgl_transaksi'] ?></td>
                    <td><?= $data['nama_barang'] ?></td>
                    <td><?= $data['harga'] ?></td>
                    <td><?= $data['jumlah_diambil'] ?></td>
                    <td><?= $data['stok'] ?></td>
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
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>