<!DOCTYPE html>
 <html>
 <head>
 	<title>halaman admin</title>
 </head>
 <body>
 
 <h1>daftar mahasiswa</h1>

 <a href="tambah.php">Tambah data mahasiswa</a>
 <br><br>
 <form action="" method="post">
 	<input type="text" name="keyword" size="40" autofocus placeholder="masukkkan nama atau nrp...." autocomplete="off">
 	<button type="submit" name="cari">CARI!!</button>
 </form>
 <table border="1" cellpadding="10" cellspacing="0">
<br>
 	<tr>
 		<td>No.</td>
 		<td>Aksi</td>
 		<td>gambar</td>
 		<td>nama</td>
 		<td>nrp</td>
 		<td>email</td>
 		<td>jurusan</td>
 	</tr>
 	<?php foreach ($mahasiswa as $row ) : ?>
 		
 	
 	<tr>
 	<td><?php echo $row["id"]; ?></td>
 	<td>
 		<a href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a>
 		<a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick=" return confirm('apa anda yakin akan menghapus');">Hapus</a>

 	</td>
 	<td><img src="img/<?php echo $row["gambar"]; ?>"></td>
 	<td><?php echo $row["nama"]; ?></td>
 	<td><?php echo $row["nrp"]; ?></td>
 	<td><?php echo $row["email"]; ?></td>
 	<td><?php echo $row["jurusan"]; ?></td>
 	</tr>
 	<?php endforeach; ?>


 </table>
 </body>
 </html>