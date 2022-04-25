<?php

session_start();
if(isset($_SESSION['Uname'])){
    
   }
   else{
     
 header('location:../../index.php');
   
}


include("docx_metadata.php");
include('includes/header.php');
include('includes/navbar.php');
include('ry.php');
?>



<div class="container-fluid">
    <div class ="card-shadow-mb-4">
    <div class ="card-header-py-3">
        <h5 class ="m-0 font-weight-bold text-dark-100">All Documents</h5>

<div class="card-body">


<div class ="table-responsive">
    
<?php

$query = "SELECT * FROM filemanage ORDER BY id DESC";
$query_run = mysqli_query($connection, $query);

?>
<table  id="DataTableYepi" class = "table table-boardered" width="100%" cellspacing="0" style = "color:black">
 <thead>
    <tr>
    <th>ID</th>
        <th>File Name</th>
        <th>File Type</th>
        <th>Download</th>
        <th>Archive</th>
        <th>Delete</th>
    </tr>
 </thead>
 <tbody>

 <?php
 if(mysqli_num_rows($query_run) > 0)

 {
  while ($row = mysqli_fetch_assoc($query_run))
   {
   
    ?>
   <?php 
                        $filename = $row['file'];
                        ?>
<?php
$docxmeta = new docxmetadata();
$docxfile = "lfupload/$filename"; 

?>  
    <tr>
    <td> <?php echo $row['id']; ?> </td>
        <td> <?php echo $row['file']; ?> </td>
        <td> <?php
$path_info = pathinfo($docxfile);
echo $path_info['extension'];

?> </td>
       
        <td>
        <form action="meta.php" method= "post">
        <input type="hidden" name = "edit_id" value = "<?php echo $row['id']; ?>">
        <button type ="submit" name="edit_btn" class = "btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Download</button>
        </form>
        </td>

        <td>
        <form action="#" method= "post">
        <input type="hidden" name = "edit_id" value = "<?php echo $row['id']; ?>">
        <button type ="submit" name="edit_btn" class = "btn btn-warning"><i class="fa fa-archive" aria-hidden="true"></i> Archive</button>
        </form>
        </td>

        <td>
                <form action="#" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="mlistdelete_btn" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </form>
        </td>
       
    </tr>

    
     <?php
  }


 } 
 else{
  echo "NO RECORD FOUND";
 }
 ?>
 </tbody>
</table>

</div>
</div>
</div>
</div>
</div>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
