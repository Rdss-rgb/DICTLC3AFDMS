
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #002642">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand my-5 d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                <img src="img/logodict.png" width = "100" height = "90">
                </div>
                <div class="sidebar-brand-text">DICT LC3<br>
                <small class ="text-warning">Admin and Finance DMS</small>
                
            </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- <li class="nav-item active">
                <a class="nav-link" href="mlist.php">
                <i class="fas fa-globe"></i>
                    <span>Web Services</span></a>
            </li> -->

              <!-- Divider -->
              <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
               Document Management 
            </div>
  
              <!-- <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#activity1">
            <i class="fa fa-inbox" style="color:white" aria-hidden="true"></i>
            <span style="color:white; font-weight:bold">Inbox</span>  <span class="count-numbers" style="color:yellow; font-weight:bold">  <?php 
    // require 'security.php';

    // $sr= $_SESSION['Uname'];
     //$sql="SELECT * FROM inbox where To1='$sr' "; 
     //$query_run=mysqli_query($connection,$sql);
      
    // $row=mysqli_num_rows($query_run);

     //echo '+'.''.$row;
   ?></span></a>
        </li>-->
           <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item active">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2"
                    aria-expanded="true" aria-controls="collapseTwo2">
                          <i class="fa fa-folder-open" aria-hidden="true"></i>
                    <span>Document Storage</span>
                </a>
                <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin & Finance Storage</h6>
                        <a class="collapse-item" href="all.php"><strong>All Documents</strong></a>
                        <a class="collapse-item" href="type-storage.php"><strong>Document Type Storage</strong></a>

                    </div>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-file"></i>
                    <span>Documents</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Documents</h6>
                     
						  <a class="collapse-item" href="add.php"><strong>My Document<span class="count-numbers" style="color:red; font-weight:bold">  <?php 
     require 'security.php';

     $sr= $_SESSION['Uname'];
     $sql="SELECT * FROM filemanage where addby='$sr' "; 
     $query_run=mysqli_query($connection,$sql);
      
     $row=mysqli_num_rows($query_run);
if($row=='0'){
  echo $row;
}
else{
  echo '+'.''.$row;
}
   
   ?></span></strong></a>
                       
                    </div>
                </div>
              
            </li>
          
        <!-- Divider -->
        <hr class="sidebar-divider">

      
             <!-- Heading -->
        <div class="sidebar-heading">
          Detailed logs
        </div>

          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#activity">
            <i class="fa fa-history" aria-hidden="true"></i>
            <span>Activity logs</span></a>
        </li>

            


            <!-- <li class="nav-item">
                <a class="nav-link" href="form.php">
                <i class="fas fa-users"></i>
                    <span>Form Try</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

    
        </ul>
        <!-- End of Sidebar -->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
        
   
        <ul class="navbar-nav ml-auto">

			
			<script type="text/javascript">                       //Time
   tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
   tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

      function GetClock(){
            var d=new Date();
            var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
                if(nyear<1000) nyear+=1900;
                     var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;
                           if(nhour==0){ap=" AM";nhour=12;}
                           else if(nhour<12){ap=" AM";}
                           else if(nhour==12){ap=" PM";}
                           else if(nhour>12){ap=" PM";nhour-=12;}

                     if(nmin<=9) nmin="0"+nmin;
                     if(nsec<=9) nsec="0"+nsec;

                           document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
                        }

                     window.onload=function(){ 
                        GetClock(); 
                        setInterval(GetClock,1000);
                        }
</script>
           <small class =" text-dark mt-4 mx-2">  <div class="toggle" onclick="toggleMenu();"></div>
        <div class="time"><div id="clockbox"></div></div></small> <small class = " text-dark mt-4" id='ct7' ></small>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  
                   <P class = "my-2"> <?php $sr= $_SESSION['Uname'];
                   echo ''.$sr.'';
                   ?></p>

                   </span>
                   <?php 
                        $sr=$_SESSION['Uname'];
                        $query="SELECT * FROM users WHERE username='$sr'";
       $query_run=mysqli_query($connection,$query);
       
      foreach($query_run as $row)
      {

      
  
     
  }?>
                        <?php echo '<img src="Avatar/'.$row['avatar'].'" width="38px;" height="38px"; " style="border-radius: 50%;">' ?>
                 
                   
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="register.php">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <!-- <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a> -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout 
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->
 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#">
        <i class="fas fa-angle-up"></i>
    </a>

        <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="logout.php" method="POST">
                    <button type = "submit" name = "logout_btn" class="btn btn-primary">Logout</button>
                    </form>


                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="activity1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-address-book" aria-hidden="true"></i> Inbox</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
      </div>
      <div class="modal-body" style="overflow: auto">
      <?php
$sr= $_SESSION['Uname'];
echo ''.$sr.'';
$query = "SELECT * FROM inbox where To1='$sr' ORDER BY in_id DESC LIMIT 10";
$query_run = mysqli_query($connection, $query);

?>
<table class="table table-dark">
 <thead>
    <tr class="text-center">
        <th >Subject</th>
        <th >File</th>
        <th>From</th>
        <th>Date/Time</th>
        <th>Remarks</th>
        <th>From</th>
    </tr>
 </thead>
 <tbody class="text-center">

 <?php
 if(mysqli_num_rows($query_run) > 0)

 {
  while ($row = mysqli_fetch_assoc($query_run))
   {
   
    ?> <td> <?php
      echo ($row['To1']); 
     
     ?>  
    
    
    </td>
        <td> <?php echo $row['Subject']; ?> </td>
        <td> <?php echo  '12313' ?>
        </td>
       
        <td> <?php echo  $row['DDate']; ?>
        </td>
        <td> <?php echo  $row['Remarks']; ?>
        </td>
       
        <td> <?php echo  $row['From1']; ?>
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

      <div class="modal-footer">
        <a href="history.php"><button type="button" class="btn btn-primary">View All</button></a>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="activity" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-history" aria-hidden="true"></i> Activity</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
      </div>
      <div class="modal-body"  style="overflow: auto">
      <?php

$query = "SELECT * FROM activity ORDER BY actid DESC LIMIT 5";
$query_run = mysqli_query($connection, $query);

?>
<table style="font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  font-size:auto;
  width: 100%;">

 <tbody>

 <?php
 if(mysqli_num_rows($query_run) > 0)

 {
  while ($row = mysqli_fetch_assoc($query_run))
   {

    if(function_exists("facebook_time_ago") ===FALSE){
     function facebook_time_ago($timestamp)  
     {      
          $time_ago = strtotime($timestamp);  
          date_default_timezone_set("Asia/Manila");
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
         return "Just Now";  
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
     
      }}
  
?>
 
    <tr>

    
    <td class="mr-3" >  <?php echo '<img src="Avatar/'.$row['avatar'].'" width="65px;" height="65px"; style="border-radius: 12%;"> <br><br>' ?>  </td>  
        <td  class="text-dark ">  <?php 
        if($row['Action']=="Deleted")
        {
  echo '<div style="width:95%; float:right"><label style=color:black;font-weight:bold>'.$row['name'].'</label> <label style="color:red;font-weight:bold">'.$row['Action'].'</label>   <label style=color:black;>   '.$row['filename'].' </label>  ';
        }
        else if($row['Action']=="Added"){
  echo '<div style="width:95%; float:right"><label style=color:black;font-weight:bold>'.$row['name'].'</label> <label style="color:green;font-weight:bold">'.$row['Action'].'</label>   <label style=color:black;>   '.$row['filename'].' </label>  ';
        }
        else if($row['Action']=="Download"){
   echo '<div style="width:95%; float:right"><label style=color:black;font-weight:bold>'.$row['name'].'</label> <label style="color:limegreen; font-weight:bold">'.$row['Action'].'</label>    <label style=color:black;>  '.$row['filename'].' </label>  ';
        }
        else if($row['Action']=="Archive"){
          echo '<div style="width:95%; float:right"><label style=color:black;font-weight:bold>'.$row['name'].'</label> <label style="color:orange;font-weight:bold">'.$row['Action'].'</label>  <label style=color:black;>    '.$row['filename'].' </label>  ';
               }
        else if($row['Action']=="Unarchive"){
   echo '<div style="width:95%; float:right"><label style=color:black;font-weight:bold>'.$row['name'].'</label> <label style="color:orange;font-weight:bold">'.$row['Action'].'</label>  <label style=color:black;>    '.$row['filename'].' </label>  ';
          }
          else if($row['Action']=="Deleted From Archive")
          {
    echo '<div style="width:95%; float:right"><label style=color:black;font-weight:bold>'.$row['name'].'</label> <label style="color:red;font-weight:bold">'.$row['Action'].'</label>   <p style=color:black; >   '.$row['filename'].' </p>  ';
          }
        else{

        }
        date_default_timezone_set("Asia/Manila");
  echo '<p style="font-size:14px"> <i class="fa fa-clock-o"></i>'.' '.facebook_time_ago($row['ddate']).'</p></div>'; 

 ?>  



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
      <div class="modal-footer">
      <a href="activities.php"><button type="button" class="btn btn-primary">View All</button></a>
      </div>
    </div>
  </div>
</div>

