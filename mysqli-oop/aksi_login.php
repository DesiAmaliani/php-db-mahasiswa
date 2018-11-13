<?php
// we must never forget to start the session
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

	$query=$con->query("select * from login where username='$username' and password='$password'");
	$a=$query->num_rows;
	$hasil = $query->fetch_array();
	$errorMessage='';
		if ($a==TRUE) {
			# code...
			//the username and password match,
			//set the session
			$_SESSION['username']=$username;
			//after login we move to the main page 
			header('Location:mahasiswa.php');
			exit();
		}else{
			echo "<script>alert('Username atau Password Salah'); location='login.php';</script>";
		}
?>