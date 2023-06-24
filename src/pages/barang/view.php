<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Halaman Barang</h1>
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
              <a class="btn btn-info rounded-0" href="?page=barang_add">Tambah Barang</a>
              <br><br>
              <table id="example1" class="table table-hover">
                <thead>
                  <tr class="bg-light">
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Lokasi</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_barang INNER JOIN tbl_kategori ON tbl_barang.id_kategori = tbl_kategori.id_kategori INNER JOIN tbl_lokasi ON tbl_barang.id_lokasi = tbl_lokasi.id_lokasi");

                  $no = 1;
                  while ($data = mysqli_fetch_assoc($tampil)) { ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $data['nama_barang'] ?></td>
                    <td>Rp <?= number_format($data['harga']) ?></td>
                    <td><?= $data['nama_kategori'] ?></td>
                    <td><?= $data['stok'] ?></td>
                    <td><?= $data['nama_lokasi'] ?></td>
                    <td>
                      <a class="btn bg-primary" href="index.php?page=barang_ambil&id=<?= $data['id_barang'] ?>"><i
                          class="fas fa-cart-plus"></i></a>
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
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>