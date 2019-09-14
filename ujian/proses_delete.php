
<?php
	include "koneksi.php";
	$id=$_GET['id'];
	$modal=mysqli_query($koneksi,"Delete FROM nama WHERE id='$id'");
	header('location:index.php');
?>