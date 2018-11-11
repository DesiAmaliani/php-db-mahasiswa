<?php
$server="localhost";
$username="root";
$password="";
$database="php_db";

$con=new mysqli($server,$username,$password)or die("koneksi gagal");
$con->select_db($database) or die("database tidak bisa di buka");
?>