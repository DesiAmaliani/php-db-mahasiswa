<?php
include "koneksi.php";
?>
<html>
<head>
	<title>tabel Mahasiswa</title>
</head>
<body>
	<h1 align="center">Tabel Mahasiswa</h1>
	<?php
		$sql ='select *from mahasiswa';
		$query=$con->query($sql);
	?>
	<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
		<tr>
			<td width="112" height="29" align="center" valign="middle">NIM</td>
			<td width="112" height="29" align="center" valign="middle">Nama</td>
			<td width="112" height="29" align="center" valign="middle">Alamat</td>
			<td width="112" height="29" align="center" valign="middle"><a href="tambah_mahasiswa.html">Tambah</a></td>
		</tr>
		<?php
		while($data=$query->fetch_array()){
		?>
		<tr>
			<td p align="center"><?php echo $data['nim'];?></td>
			<td p align="center"><?php echo $data['nama'];?></td>
			<td p align="center"><?php echo $data['alamat'];?></td>
			<td p align="center"><a href="edit_mahasiswa.php?ni=<?php echo $data['nim'];?>" title="Edit data mahasiswa ini">||edit||</a><a href="delete_mahasiswa.php?ni=<?php echo $data['nim'];?>" onclick="return confirm('yakin mau di hapus ?');"> ||hapus||</a></td>
		</tr>
		<?php
		}
		?>
</table>
</body>
</html>