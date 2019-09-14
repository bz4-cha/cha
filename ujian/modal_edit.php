
<?php
    include "koneksi.php";
	$id=$_GET['id'];
	$sql=mysqli_query($koneksi,"SELECT a.id, a.name as nama,b.name,c.salary FROM nama as a join work as b on a.id_work = b.id_work join kategori as c on a.id_salary=c.id WHERE a.id='$id'");
	while($r=mysqli_fetch_array($sql)){
        $id = $r['id'];
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
        </div>

        <div class="modal-body">
        	<form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="name">Name</label>
                    <input type="hidden" name="id"  class="form-control" value="<?php echo $r['id']; ?>" />
     				<input type="text" name="name"  class="form-control" value="<?php echo $r['nama']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="id_work">Work</label>
                <select name="id_work">
                   <option value="1">Front Dev</option>
                   <option value="2">Backend Dev</option> 
                 </select>    
                 <?php echo $r['name']; ?>            
               </div>

               <div class="form-group" style="padding-bottom: 20px;">
                  <label for="id_salary">Salary</label>
                <select name="id_salary">
                   <option value="1">10.000</option>
                   <option value="2">12.000</option> 
                 </select>    
                 <?php echo $r['salary']; ?>            
               </div>

                <!-- <div class="form-group" style="padding-bottom: 20px;">
                	<label for="id_work">Work</label>
     				<textarea name="id_work"  class="form-control"><?php echo $r['id_work']; ?></textarea>
                </div> -->

                <!-- <div class="form-group" style="padding-bottom: 20px;">
                	<label for="id_slary">Salary</label> 

     				<input type="text" name="id_slary"  class="form-control" value="<?php echo $r['salary']; ?>"/>
                </div>
 -->
	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit">
	                    Confirm
	                </button>

	                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
	               		Cancel
	                </button>
	            </div>

            	</form>

             <?php } ?>

            </div>

           
        </div>
    </div>
