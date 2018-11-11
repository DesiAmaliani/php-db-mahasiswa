<?php
include "koneksi.php";
if(isset($_POST['edit'])){
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];

	$sql='update mahasiswa set nama="'.$nama.'", alamat="'.$alamat.'" where nim="'.$nim.'"';
	$query=mysqli_query($con,$sql);
	if($query){
		header('location: mahasiswa.php');
	}else{
		echo 'Gagal';
	}
}
?>