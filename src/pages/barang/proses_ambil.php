<?php
$id_barang = $_POST['barang'];
$diambil = $_POST['jumlah_diambil'];

// cek stok
$queryStok = mysqli_query($koneksi, "SELECT stok FROM tbl_barang WHERE id_barang = '$id_barang'");
$dataStok = mysqli_fetch_assoc($queryStok);

if ($dataStok['stok'] == 0) {
	echo "<script>alert('Stok barang sudah habis!'); document.location.href = '?page=barang'</script>";
} else {
	if ($diambil > $dataStok['stok']) {
		echo "<script>alert('Jumlah barang di ambil lebih besar dari stok!'); document.location.href = '?page=barang'</script>";
	} else {
		$stokBaru = ((int)$dataStok['stok'] - $diambil);

		$queryUpdate = mysqli_query($koneksi, "UPDATE tbl_barang SET stok = '$stokBaru' WHERE id_barang = '$id_barang'");

		mysqli_query($koneksi, "INSERT INTO tbl_transaksi VALUES (NULL, NOW(), '$id_barang', '$diambil')");

		if (mysqli_affected_rows($koneksi) > 0) {
			echo "<script>alert('Ambil barang berhasil!'); document.location.href = '?page=transaksi'</script>";
		} else {
			echo "<script>alert('Ambil barang gagal!'); document.location.href = '?page=barang'</script>";
		}
	}
}