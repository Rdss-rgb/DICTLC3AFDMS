<?php

include('security.php');
include("docx_metadata.php");
include('includes/header.php');
include('includes/navbar.php');
?>



<div class="container-fluid">
    <div class ="card-shadow-mb-4">
    <div class ="card-header-py-3">
        <h5 class ="m-0 font-weight-bold text-dark">Manage Documents</h5>

<div class="card-body">


<div class ="table-responsive">
    
<?php

$query = "SELECT * FROM filemanage ORDER BY id DESC";
$query_run = mysqli_query($connection, $query);

?>
<table  id="DataTable" class = "table table-boardered text-dark" width="100%" cellspacing="0">
 <thead>
    <tr>
        <th>ID </th>
        <th>File Name</th>
        <th>Revisions</th>
        <th>Modified Time</th>
        <th>Created Time</th>
        <th>View</th>
        <th>Download</th>
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
        $docxmeta->setDocument($docxfile);
        echo "<strong>Revision : " . $docxmeta->getRevision() . "</strong><br>"; ?> </td>
        <td> <?php  $docxmeta->setDocument($docxfile);
                     $datez = $docxmeta->getDateModified();
                     $newDate2   =   date("l M, d, Y", strtotime($datez));
                     echo "<strong> Date Modified : ". $newDate2; ?> </td>
        <td> <?php  $docxmeta->setDocument($docxfile);
                  $datec = $docxmeta->getDateCreated();
                            $newDate  =   date("l M, d, Y", strtotime($datec));
                            echo "<strong> Date Created : ". $newDate ; ?> </td>
       
        <td>
        <form action="meta.php" method= "post">
        <input type="hidden" name = "edit_id" value = "<?php echo $row['id']; ?>">
        <button type ="submit" name="edit_btn" class = "btn btn-success">VIEW METADATA</button>
        </form>
        </td>

        <td>
        <form action="#" method= "post">
        <input type="hidden" name = "edit_id" value = "<?php echo $row['id']; ?>">
        <button type ="submit" name="edit_btn" class = "btn btn-success">Download</button>
        </form>
        </td>

        <td>
                <form action="#" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="mlistdelete_btn" class="btn btn-danger"> DELETE</button>
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



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
