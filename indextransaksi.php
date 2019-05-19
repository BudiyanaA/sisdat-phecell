<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan data dari database</title>
</head>
<body>
	<div class="judul">		
		<h2>Menampilkan data dari database</h2>
	</div>
	<br/>
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
 
	<h3>Data transaksi</h3>
	<table border="1" class="table">
		<tr>
			<th>Id</th>
			<th>Nomor Hp</th>
            <th>Nama Customer</th>
            <th>Produk</th>
			<th>Nominal</th>
            <th>Potongan</th>
			<th>Waktu</th>
            <th>Total</th>
			<th>Status Pembayaran</th>
            <th>Status Pengiriman</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM pesanan")or die(mysql_error());
		$nomor = 1;
		// $get_cust = mysql_fetch_array(mysql_query("SELECT * FROM customer,pesanan WHERE username = pesanan.customer"));
		$get_cust = mysql_fetch_array(mysql_query("SELECT * FROM customer WHERE username = pesanan.username"));
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $data['id_pesanan']++; ?></td>
			<td><?php echo $data['nomor_hp']; ?></td>
			<td><?php echo $get_cust['nama_cust']; ?></td>
			<td><?php echo $data['pekerjaan']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>

<?php 
if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo "Data berhasil di input.";
	}else if($pesan == "update"){
		echo "Data berhasil di update.";
	}else if($pesan == "hapus"){
		echo "Data berhasil di hapus.";
	}
}
?>
