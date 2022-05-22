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
        <h5 class ="m-0 font-weight-bold text-dark-100">History Logs</h5>

<div class="card-body">


<div class ="table-responsive">
    
<?php

$query = "SELECT * FROM history ORDER BY hist_id DESC";
$query_run = mysqli_query($connection, $query);

?>
<table id="DataTableExp"  class = "table table-boardered" width="100%" cellspacing="0" style = "color:black">
 <thead>
    <tr class="text-center">
    <th>His_id</th>
        <th>Performed</th>
        <th>Employee Name</th>
        <th>Date/Time</th>
        <th>Activity</th>
    </tr>
 </thead>
 <tbody class="text-center">

 <?php
 if(mysqli_num_rows($query_run) > 0)

 {
  while ($row = mysqli_fetch_assoc($query_run))
   {
   
    ?>  <td> <?php echo $row['hist_id']; ?> </td>
    <td>
    <?php 
    date_default_timezone_set("America/New_York");
    facebook_time_ago($row['ddate']);

    ?>
    </td>
        <td> <?php echo $row['Uname']; ?> </td>
       
        <td> <?php echo  $row['act']; ?>
        </td>
        <td> 
          
        
      
        <?php  
        if('Login'==$row['Dt']){?>
             <button type="button" class="btn btn-primary"><?php echo $row['Dt'];?></button><?php
        } 
        else{?>
        <button type="button" class="btn btn-danger"><?php echo $row['Dt'];?></button>
        <?php
           }?> 
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
