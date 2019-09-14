
<!doctype html>
<html lang="en">
<head>
<title>OKI Rivadli | Crud</title>
<meta content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" name="viewport"/>
<meta content="Oki Rivadli" name="author"/>
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <h2>Crud</h2>
  <p>Oki</p>

<table id="mytable" class="table table-bordered">
    <thead>
      <th>No</th>
      <th>Name</th>
      <th>Work</th>
      <th>Salari</th>
    </thead>
<?php 
  //menampilkan data mysqli
  include "koneksi.php";
  $no = 0;
  $modal=mysqli_query($koneksi,"SELECT a.id, a.name as nama,b.name,c.salary FROM nama as a join work as b on a.id_work = b.id_work join kategori as c on a.id_salary=c.id");
  while($r=mysqli_fetch_array($modal)){

  $no++;
  $id   =$r ['id'];
  $nama =$r ['nama'];
  $name =$r ['name'];
  $salary = $r ['salary'];
       
?>
  <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo  $r['nama']; ?></td>
      <td><?php echo  $r['name']; ?></td>      <td><?php echo  $r['salary']; ?></td>
  </tr>
 

<?php } ?>
</table>
</div>





</body>
</html>

  



