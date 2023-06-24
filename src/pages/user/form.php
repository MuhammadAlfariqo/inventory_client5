<div class="content-wrapper pt-4">
  <div class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="card">
            <div class="card-header">
              <h2 class="text-center">Tambah Data User</h2>
            </div>
            <div class="card-body">
              <form method="post" action="?page=user_proses">
                <div class="form-group">
                  <label for="inputNama">Nama User</label>
                  <input type="text" name="nama" class="form-control" id="inputNama">
                </div>
                <div class="form-group">
                  <label for="inputUsername">Username</label>
                  <input type="text" name="username" class="form-control" id="inputUsername">
                </div>
                <div class="form-group">
                  <label for="inputPassword3">Password</label>
                  <input type="password" name="password" class="form-control" id="inputPassword3">
                </div>
                <div class="form-group mt-5 row text-right justify-content-end">
                  <div class="col-sm-10">
                    <a href="index.php?page=user" class="btn btn-danger mr-2">Kembali</a>
                    <input type="submit" value="Proses" class="btn btn-primary px-3">
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