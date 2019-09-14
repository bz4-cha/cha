
<?php
	include "koneksi.php";
	$id=$_POST['id'];
	$name = $_POST['name'];
	$id_work = $_POST['id_work'];
	$id_salary =$_POST['id_salary'];
	$modal=mysqli_query($koneksi,"UPDATE nama SET name = '$name',id_work = '$id_work', id_salary = '$id_salary' WHERE id = '$id'");
	header('location:index.php');
?>