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
   
    ?>  <td> <?php echo $row['hist_id']; ?> </td><td> <?php

    if(function_exists("facebook_time_ago1") ===FALSE){
     function facebook_time_ago1($timestamp)  
     {     date_default_timezone_set("Asia/Manila");
          $time_ago = strtotime($timestamp);  
          $time_difference =  time()- $time_ago;  
          $seconds = $time_difference;  
          $minutes      = round($seconds / 60 );           // value 60 is seconds  
          $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
          $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
          $weeks          = round($seconds / 604800);          // 7*24*60*60;  
          $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
          $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  
          if($seconds <= 60)  
          {  
         return "Just now";  
       }  
          else if($minutes <=60)  
          {  
         if($minutes==1)  
               {  
           return "one minute ago";  
         }  
         else  
               {  
           return "$minutes minutes ago";  
         }  
       }  
          else if($hours <=24)  
          {  
         if($hours==1)  
               {  
           return "an hour ago";  
         }  
               else  
               {  
           return "$hours hrs ago";  
         }  
       }  
          else if($days <= 7)  
          {  
         if($days==1)  
               {  
           return "yesterday";  
         }  
               else  
               {  
           return "$days days ago";  
         }  
       }  
          else if($weeks <= 4.3) //4.3 == 52/12  
          {  
         if($weeks==1)  
               {  
           return "a week ago";  
         }  
               else  
               {  
           return "$weeks weeks ago";  
         }  
       }  
           else if($months <=12)  
          {  
         if($months==1)  
               {  
           return "a month ago";  
         }  
               else  
               {  
           return "$months months ago";  
         }  
       }  
          else  
          {  
         if($years==1)  
               {  
           return "one year ago";  
         }  
               else  
               {  
           return "$years years ago";  
         }  
       }  
     }  }
     date_default_timezone_set("Asia/Manila");  
      echo facebook_time_ago1($row['act']); 
     
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
