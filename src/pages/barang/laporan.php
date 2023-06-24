<?php
//Mengenalkan variabel
$sqlperiode = "";
$awaltgl = "";
$akhirtgl = "";
$tglawal = "";
$tglakhir = "";

if(isset($_POST['tampil'])) {
	$tglawal = isset($_POST['tglawal']) ? $_POST['tglawal'] : "01-".date('m-y');
	$tglakhir = isset($_POST['tglakhir']) ? $_POST['tglakhir'] : date('m-y');
	$sqlperiode = "' WHERE A.tglambil BETWEEN ".$tglawal."'AND'".$tglakhir."'";
} else {
	$awaltgl = "01-".date('m-y');
	$akhirtgl = date('d-m-y');

	$sqlperiode = "' WHERE A.tglambil BETWEEN ".$awaltgl."'AND'".$akhirtgl."'";
}
?>


<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-dark mb-4">Data Barang Masuk</h1>
          <h4>Periode Tanggal <?php echo ($tglawal);?> s/d <?php echo ($tglakhir);?></h4>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <form action="" method="post">
            <div class="row">
              <div class="col-lg-3">
                <input type="date" name="tglawal" class="form-control" value="<?php echo $awaltgl;?>" size="10">
              </div>
              <div class="col-lg-3">
                <input type="date" name="tglakhir" class="form-control" value="<?php echo $akhirtgl;?>" size="10">
              </div>
              <div class="col-lg-3">
                <input type="submit" name="tampil" class="btn btn-success" value="Tampilkan">
              </div>
            </div>
          </form>
          <br>
          <table id="example11" class="table table-bordered table-hover">
            <thead>
              <tr class="bg-gray-dark">
                <th>No</th>
                <th>Id Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th>Lokasi</th>
                <th>Stok</th>
              </tr>
            </thead>
            <tbody>
              <?php
							$tampil = mysqli_query($koneksi, "SELECT brg.*, kat.nama_kategori FROM tbl_barang brg LEFT JOIN tbl_kategori kat ON kat.id_kategori=brg.kategori 
								LEFT JOIN tbl_lokasi lok ON lok.id_lokasi=brg.lokasi");

							$no=1;
							while ($data = mysqli_fetch_array($tampil)) { ?>
              <tr>
                <td><?= $no ?></td>
                <td><?= $data['id_barang'] ?></td>
                <td><?= $data['nama_barang'] ?></td>
                <td><?= $data['harga'] ?></td>
                <td><?= $data['nama_kategori'] ?></td>
                <td><?= $data['lokasi'] ?></td>
                <td><?= $data['stok'] ?></td>
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