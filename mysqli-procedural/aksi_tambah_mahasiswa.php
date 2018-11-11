<?php
include "koneksi.php";
if(isset($_POST['tambah'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	
	$sql='insert into mahasiswa(nim,nama,alamat) values("'.$nim.'","'.$nama.'","'.$alamat.'")';
	$query= mysqli_query($con,$sql);
	if($query){
		header('location: mahasiswa.php');
	}else{
		echo'gagal';
	}
}
?>