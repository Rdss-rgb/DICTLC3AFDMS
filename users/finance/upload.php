<?php

include('security.php');

include('includes/header.php');
include('includes/navbar.php');
?>



<div class="container-fluid">
    <div class ="card-shadow-mb-4">
    <div class ="card-header-py-3">
    <h5 class ="m-0 font-weight-bold text-dark">Upload a Document</h5>
 <!-- <button type="button" class="btn btn-primary py-2" data-toggle="modal" data-target="#addhomepage">
       Edit Homepage Info
</button> -->

<div class="card-body">

<div class ="table-responsive">
    
<?php


$query = "SELECT * FROM docu_try";
$query_run = mysqli_query($connection, $query);

?>
<table class = "table table-boardered text-dark" id= "dataTable" width="100%" cellspacing="0">
 <thead>
    <tr>
        <th>Title</th>
        <th>Ambassadog Petname</th>
        <th>Ambassadog Photo</th>
        <th>EDIT</th>
       <th>DELETE</th>
    <tr>
 </thead>
<tbody>

<?php
if(mysqli_num_rows($query_run) > 0)

{
  while ($row = mysqli_fetch_assoc($query_run))
   {

    ?>

    <tr>
        <td> <?php echo $row['title']; ?> </td>
        <td> <?php echo $row['petname'];?> </td>
        <td> <?php echo '<img src = "aupload/'.$row['file'].'" alt = "images" width = "125px;" height="125px;">' ?>  </td>
        <td>
     <form action="editambass.php" method= "post">
        <input type="hidden" name = "edit_id" value = "<?php echo $row['id']; ?>">
        <button type ="submit" name="edit_btn" class = "btn btn-success">EDIT</button>
        </form>
        </td>

        <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="homedelete_btn" class="btn btn-danger"> DELETE</button>
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


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
