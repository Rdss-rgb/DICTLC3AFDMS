<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

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
        <h5 class ="m-0 font-weight-bold text-dark-100">Archive Documents</h5>
<i style="color:red">Note: After 7 days, Documents under archive files will be auto-deleted from the system.</i>
<div class="card-body">


<div class ="table-responsive">
    
<?php

$query = "SELECT * FROM filemanage where status='archive' ORDER BY id DESC";
$query_run = mysqli_query($connection, $query);

?>
<table  id="DataTableYepi" class = "table table-boardered" width="100%" cellspacing="0" style = "color:black">
 <thead>
    <tr>
    <th>ID</th>
    <th>Date Archive</th>
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
    <td> <?php

if(function_exists("facebook_time_ago2") ===FALSE){
 function facebook_time_ago2($timestamp)  
 {      
      $time_ago = strtotime($timestamp);  
      $current_time = time();  
      $time_difference = $current_time - $time_ago;  
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
         echo facebook_time_ago2($row['date_arc']); 
         if(facebook_time_ago2($row['date_arc'])=='7 days ago'){

            $id=$row['id'];
                            $username=$_SESSION['Uname'];
                            $query1="SELECT * FROM users WHERE username='$username'";
                            $query_run1=mysqli_query($connection,$query1);

                            foreach($query_run1 as $row1)
                            {




                            }
                            $ava=$row1['avatar'];
                            date_default_timezone_set("America/New_York");
                            $now=date("F j, Y, H:i:s");
                            $username=$_SESSION['Uname'];
                            $query3 = "SELECT * FROM filemanage WHERE id='$id' ";
                            $query_run3 = mysqli_query($connection, $query3);
                            foreach($query_run3 as $row3)
                            {
                            $filename = $row3['file'];
                            }
                            $sql2= "INSERT INTO activity (avatar,name,filename,Action,ddate) VALUES('$ava','$username','$filename','Deleted From Archive','$now')";
                            mysqli_query($connection,$sql2);

                            $sql1 = "SELECT * FROM filemanage WHERE id='$id'";
                            $result = mysqli_query($connection, $sql1);

                            $file = mysqli_fetch_assoc($result);
                            $filepath = $file['file'];
                            unlink('lfupload/' .  $filepath);


                            $query = "DELETE  FROM filemanage WHERE id ='$id' ";  
                            $query_run = mysqli_query($connection,$query);  
                            if($query_run){
                             
                            }

                                

                              








         }
         else{

         }
        ?></td>
        <td> <?php echo $row['file']; ?> </td>
        
        <td> <?php
$path_info = pathinfo($docxfile);
echo $path_info['extension'];

?> </td>
       
       <td>
        <form action="Dl.php" method= "post">
        <input type="hidden" name = "edit_id" value = "<?php echo $row['id']; ?>">
        <button type ="submit" name="edit_btn" class = "btn btn-success">Download</button>
        </form>
        </td>


        <td><a href="code.php?unarchive=<?php echo $row['id'];?>" class='btn btn-warning arc-btn'><i class="fa fa-archive" aria-hidden="true"></i> Unarchive</a></td>
    

        <td><a href="code.php?delete5=<?php echo $row['id'];?>" class='btn btn-danger arc-btn1'><i   class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
       
        
       
    </tr>

    
     <?php
  }


 } 
 else{
  echo "NO RECORD FOUND";
 }
 ?>
    
    <script>
        $('.arc-btn').on('click',function(e){
            e.preventDefault();
            const href = $(this).attr('href') 
            Swal.fire({
                title: 'Unarchive Document',
                text: "Are you sure you want to Unarchived the Document ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Unarchive it!'
                }).then((result) => {
                    if (result.value) {
                        document.location.href = href;   
                    }
                })
         })
     
    </script>
    <script>
        $('.arc-btn1').on('click',function(e){
            e.preventDefault();
            const href = $(this).attr('href') 
            Swal.fire({
                title: 'Delete Document',
                text: "Are you sure you delete this Document ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!'
                }).then((result) => {
                    if (result.value) {
                        document.location.href = href;   
                    }
                })
                
         })
    </script>

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
