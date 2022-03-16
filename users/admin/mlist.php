<?php
include('security.php');

include('includes/header.php');
include('includes/navbar.php');
?>


<!-- Button trigger modal -->

<!-- Modal -->


<div class="container-fluid">
    <div class ="card-shadow-mb-4">
    <div class ="card-header-py-3">
        <h5 class ="m-0 font-weight-bold text-dark">Web Services Try</h5>
 <a class="btn btn-primary float-right mb-4" href = "#" role="button"> Add A Document</a>

<div class="card-body">


<div class ="table-responsive">
    
<?php

$query = "SELECT * FROM docu_try ORDER BY id DESC";
$query_run = mysqli_query($connection, $query);

?>
<table  id="DataTableMli" class = "table table-boardered text-dark" width="100%" cellspacing="0">
 <thead>
    <tr>
        <th>ID </th>
        <th>File Name</th>
        <th>File Type</th>
        <th>Date Uploaded</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
 </thead>
 <tbody>

 <?php
 if(mysqli_num_rows($query_run) > 0)

 {
  while ($row = mysqli_fetch_assoc($query_run))
   {
   
    ?>

    <tr>
        <td> <?php echo $row['ID']; ?> </td>
        <td> <?php echo $row['FileName']; ?> </td>
        <td> <?php echo $row['FileType'];?> </td>
        <td> <?php echo $row['date'];?> </td>

       
        <td>
        <form action="#" method= "post">
        <input type="hidden" name = "edit_id" value = "<?php echo $row['id']; ?>">
        <button type ="submit" name="edit_btn" class = "btn btn-success">EDIT</button>
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
