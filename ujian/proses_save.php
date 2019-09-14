
<?php
include "koneksi.php";
$name = $_POST['name'];
$id_work = $_POST['id_work'];
$id_salary =$_POST['id_salary'];
mysqli_query ($koneksi,"INSERT INTO nama (name,id_salary,id_work) VALUES ('$name','$id_salary','$id_work')");
header('location:index.php');
?>