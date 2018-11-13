<?php
session_start();
include "koneksi.php";

  if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit();
  }else{
    $username = $_SESSION['username'];
  }
?>
<html>
<head>
	<title>tabel Mahasiswa</title>
</head>
<body>
	<h1 align="center">Tabel Mahasiswa</h1>
	<p><a href="logout.php">logout</a></p>
	<?php
		$sql ='select *from mahasiswa';
		$query=mysqli_query($con,$sql);
	?>
	<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
		<tr>
			<td width="112" height="29" align="center" valign="middle">NIM</td>
			<td width="112" height="29" align="center" valign="middle">Nama</td>
			<td width="112" height="29" align="center" valign="middle">Alamat</td>
			<td width="112" height="29" align="center" valign="middle"><a href="tambah_mahasiswa.html">Tambah</a></td>
		</tr>
		<?php
		while($data=mysqli_fetch_array($query)){
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