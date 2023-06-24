<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Tambah Data Transaksi</h1>
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
							<form method="post" action="?page=transaksi_proses">
								<table class="table">
									<tr>
										<td>ID Transaksi</td>
										<td>:</td>
										<td><input type="text" value="<?= $edit['id_barang']?>" name="id" readonly=""></td>
									</tr>
									<tr>
										<td>Tanggal</td>
										<td>:</td>
										<td><input type="date"  value="" name="tanggal" required=""></td>
									</tr>
									<tr>
										<td>ID Barang</td>
										<td>:</td>
										<td><input type="text" value="<?= $edit['id_barang']?>" name="id" readonly=""></td>
									</tr>
									<tr>
										<td>Jumlah Diambil</td>
										<td>:</td>
										<td><input type="text"  value="" name="jumlah" required=""></td>
									</tr>
									<tr>
										<td colspan="3">
											<input type="submit" value="Proses" class="btn btn-primary">
											<a href="index.php?page=transaksi" class="btn btn-danger">Kembali</a>
										</td>
									</tr>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>