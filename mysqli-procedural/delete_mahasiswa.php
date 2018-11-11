<?php
include "koneksi.php";
$ni	= $_GET['ni'];
$sql 	= 'delete from mahasiswa where nim="'.$ni.'"';
$query	= mysqli_query($con,$sql);
header('location: mahasiswa.php');
?>