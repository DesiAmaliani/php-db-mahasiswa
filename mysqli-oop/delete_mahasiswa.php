<?php
include "koneksi.php";
$ni	= $_GET['ni'];
$sql 	= 'delete from mahasiswa where nim="'.$ni.'"';
$query	= $con->query($sql);
header('location: mahasiswa.php');
?>