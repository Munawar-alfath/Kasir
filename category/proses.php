<?php 
include '../connect.php';
$barang= $_POST['name'];
$sql= 	"INSERT INTO category (name) VALUES ('$barang')";
$query= mysqli_query($koneksi,$sql);
if ($query) {
	header('location: index.php');
}

 ?>