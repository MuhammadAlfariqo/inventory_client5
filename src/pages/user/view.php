<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Halaman User</h1>
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
              <a class="btn btn-info rounded-0" href="?page=user_add">Tambah User</a>
              <br><br>
              <table id="example1" class="table table-hover">
                <thead>
                  <tr class="bg-light">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
									include "config/koneksi.php";
										//  mysqli_query untuk eksekusi
									$tampil = mysqli_query($koneksi,"SELECT * FROM tbl_user ");
									$no=1;
									while ($data = mysqli_fetch_array($tampil)) { ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $data['nama_user'] ?></td>
                    <td><?= $data['username'] ?></td>
                    <td><?= md5($data['password']) ?></td>
                    <td class="text-center">
                      <a class="btn bg-info" href="index.php?page=user_edit&id=<?=$data['id_user']?>"><i
                          class="fas fa-pen-square fa-lg"></i></a>
                      <a class="btn bg-danger" href="index.php?page=user_hapus&id=<?=$data['id_user']?>"
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