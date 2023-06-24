<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Halaman Kategori</h1>
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
              <a class="btn btn-info rounded-0" href="?page=kategori_add">Tambah Kategori</a>
              <br><br>
              <table id="example1" class="table table-hover">
                <thead>
                  <tr class="bg-light">
                    <th>No</th>
                    <th>Nama kategori</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-widget="expandable-table" aria-expanded="false">
                    <?php
										include "config/koneksi.php";
										//  mysqli_query untuk eksekusi
										$tampil = mysqli_query($koneksi,"SELECT * FROM tbl_kategori ");
										$no=1;
										while ($data = mysqli_fetch_array($tampil)) { ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $data['nama_kategori'] ?></td>
                    <td class="text-center">
                      <a class="btn btn-warning text-white"
                        href="index.php?page=kategori_edit&id=<?=$data['id_kategori']?>"><i
                          class="fas fa-pen-square fa-lg"></i></a>
                      <a class="btn bg-danger" href="index.php?page=kategori_hapus&id=<?=$data['id_kategori']?>"
                        onclick="alert('Yakin mau dihapus?')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>

                  <?php
											$no++;
										}
										?>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>