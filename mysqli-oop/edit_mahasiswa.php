<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit mahasiswa</title>
</head>
.<body>
	<h2><p align="center">EDIT DATA</p></h2>
	<?php
		if(isset($_GET['ni'])){
			$ni=$_GET['ni'];
			$query=$con->query('select *from mahasiswa where nim="'.$ni.'"');
			$data=$query->fetch_array();
			$nama=$data['nama'];
			$alamat=$data['alamat'];
		}else{
			$nama='';
			$alamat='';
		}
	?>
	<form action="aksi_edit_mahasiswa.php" method="post">
		<table width="546" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td height="20" align="left" valign="middle">nim</td>
				<td align="center" valign="top"></td>
				<td valign="middle">
				<input type="text" name="nim" value="<?php echo $_GET['ni'];?>" readonly="readonly" >
				</td>
			</tr>
			<tr>
				<td height="20" align="left" valign="middle">Nama</td>
				<td align="center" valign="top"></td>
				<td valign="middle"><label>
				<input type="text" name="nama" value="<?php echo $nama;?>"></label></td>
			</tr>
			<tr>
				<td height="20" align="left" valign="top">Alamat</td>
				<td align="center" valign="top"></td>
				<td valign="middle"><label>
				<input type="text" name="alamat" value="<?php echo $alamat;?>"></label></td>
			</tr>
			<tr>
				<td height="42"></td>
				<td></td>
				<td>
					<input type="submit" name="edit" value="Edit"><br>
	</form>
					<form method="post" action="mahasiswa.php">
					<input type="submit" name="tbatal" value="Batal"></td>
			</tr>
					</form>
		</table>
</body>
</html>