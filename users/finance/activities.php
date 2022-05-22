<?php

session_start();
if(isset($_SESSION['Uname'])){
    
   }
   else{
     
 header('location:../../index.php');
   
}


include('includes/header.php');
include('includes/navbar.php');
include('ry.php');
?>



<div class="container-fluid">
    <div class ="card-shadow-mb-4">
    <div class ="card-header-py-3">
        <h5 class ="m-0 font-weight-bold text-dark-100">Activity Logs</h5>


<div class="card-body">


<div class ="table-responsive">
    
<?php

$query = "SELECT * FROM activity ORDER BY actid DESC";
$query_run = mysqli_query($connection, $query);

?>
<table id="DataTableExp11"  class = "table table-boardered" width="100%" cellspacing="0" style = "color:black">
 <thead>
    <tr class="text-center">

        <th>Activity ID</th>
        <th>Username</th>
        <th>Activity</th>
        <th>Date</th>
    


    </tr>
 </thead>
 <tbody class="text-center">

 <?php
 if(mysqli_num_rows($query_run) > 0)

 {
  while ($row = mysqli_fetch_assoc($query_run))
   {
   
    ?>    <td><?php echo $row['actid'];?></td>
       <td class="mr-3" > <?php echo '<img src="Avatar/'.$row['avatar'].'" width="75px;" height="75px"; style="border-radius: 13%; "> <br>' ?>  <?php echo '<b>'.$row['name'].'</b>'; ?>  </td>  
        <td > <?php 
        if($row['Action']=="Deleted")
        {
  echo '<br> <label style="color:red;font-weight:bold; ">'.$row['Action'].'</label>   <label style=color:black;>   ';
        }
        else if($row['Action']=="Added"){
  echo '<br> <label style="color:green;font-weight:bold; ">'.$row['Action'].'</label>   <label style=color:black;>   ';
        }
        else if($row['Action']=="Download"){
   echo '<br> <label style="color:limegreen; font-weight:bold;">'.$row['Action'].'</label>    <label style=color:black;>  ';
        }
        else if($row['Action']=="Archive"){
          echo '<br><label style="color:orange;font-weight:bold; ">'.$row['Action'].'</label>  <label style=color:black;> ';
               }
         else if($row['Action']=="Unarchive"){
          echo '<br> <label style="color:orange;font-weight:bold;">'.$row['Action'].'</label>  <label style=color:black;>   ';
                }
         else if($row['Action']=="Deleted From Archive")
          {
            echo '<br> <label style="color:red;font-weight:bold; ">'.$row['Action'].'</label>   <label style=color:black;>   ';
          }
        else{  date_default_timezone_set("Asia/Manila");

        } ?> <?php echo ''.$row['filename'].' </label> '; ?> <?php echo '<p style="font-size:14px"> <i class="fa fa-clock-o"></i>'.' '.facebook_time_ago($row['ddate']).'</p>'; ?></td>
      
       
         
      <td><?php echo $row['ddate'];?></td>
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

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
