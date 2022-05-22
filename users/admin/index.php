<?php 

session_start();
if(isset($_SESSION['Uname'])){
    
   }
   else{
     
 header('location:../../index.php');
   
}


include('includes/header.php');
include('includes/navbar.php');

?>
<style>
.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 120px;
    border-radius: 5px;
    transition: .3s linear all;

  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px gray;
    transition: .3s linear all;
    cursor: pointer;
  }


  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
  .stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    pointer-events: auto;
    content: "";
    background-color: rgba(0,0,0,0);
}</style>

<div class="container-fluid">
  
<h1 class="h5  text-grey-800">Dashboard</h1> 
<div class="row"> 
    <div class="col-md-3">  
      <div class="card-counter text-white  card border bg-primary">
        <i class="fa fa-users" style="color:white;"></i>
        <span class="count-numbers">        <?php 
     require 'security.php';

    
     $sql="SELECT * FROM users "; 
     $query_run=mysqli_query($connection,$sql);
      
     $row=mysqli_num_rows($query_run);

     echo $row;
   ?> </span>
        <span class="count-name">Accounts</span><br>
        <a href="user_main.php" class="stretched-link"></a>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter text-white card border bg-warning" >
        <i class="fa fa-archive" style="color:white"></i>
        <span class="count-numbers"> <?php 
     require 'security.php';

    
     $sql="SELECT * FROM filemanage where status='archive' "; 
     $query_run=mysqli_query($connection,$sql);
      
     $row=mysqli_num_rows($query_run);

     echo $row;
   ?></span>
        <span class="count-name">Archive</span><br>
        <a href="archive.php" class="stretched-link"></a>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter text-white card border bg-danger">
        <i class="fa fa-file" style="color:white;"></i>
        <span class="count-numbers">  <?php 
     require 'security.php';

    
     $sql="SELECT * FROM filemanage  "; 
     $query_run=mysqli_query($connection,$sql);
      
     $row=mysqli_num_rows($query_run);

     echo $row;
   ?></span>
        <span class="count-name">Document Files</span><br>
        <a href="all.php" class="stretched-link"></a>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter text-white  card border bg-info">
        <i class="fa fa-plus" style="color:white;"></i>
        <span class="count-numbers">  </span>
        <span class="count-name">Add Documents</span><br>
        <a href="add.php" class="stretched-link"></a>
      </div>
    </div>
    
  </div>
 
  <div class="row ">
  <div class="col-md-9 mt-4">  <div class="card " style="min-height:435px">

  <div class="card-body ">
  <p>
  <b style="color:#4e73df; ">Mission</b><br>
<ul>
<i><b>“DICT of the people and for the people.”</b></i><br>

The Department of Information and Communications Technology commits to:<br>
<ul>
<li>Provide every Filipino access to vital ICT infostructure and services</li>
<li>Ensure sustainable growth of Philippine ICT-enabled industries resulting to creation of more jobs</li>
<li>Establish a One Digitized Government, One Nation</li>
<li>Support the administration in fully achieving its goals</li>
<li>Be the enabler, innovator, achiever and leader in pushing the country’s development and transition towards a world-class digital economy</li>
</ul></ul>
<b style="color:#4e73df;">Vision</b><br><ul>

<i><b>“An innovative, safe and happy nation that thrives through and is enabled by Information and Communications Technology.”</b></i><br>

DICT aspires for the Philippines to develop and flourish through innovation and constant development of ICT in the pursuit of a progressive, safe, secured, contented and happy Filipino nation.
<br>

</ul>

<b style="color:#4e73df;">Core Values</b><br>
<ul>
<b style="color:blue;">D </b>– Dignity
<b style="color:#cf9b17;">I </b>– Integrity
<b style="color:red;">C </b>– Competency and Compassion
<b style="color:gray;">T </b>– Transparency</p>
</ul>
  </div>
 
</div></div>
 <div class="col-md-3 mt-4">  
    
<div class="card ">
  <div class="card-header">
<b>Document types</b>
  </div>
        <div class="chart">
            <canvas id="doughnut_chart"></canvas>
</div>

</div>


  </div>
  </div>  

  <div class="row">
    <div class="col-md-4 mt-4"> 
      <div class="card ">
         <div class="card-header">
         <b> Activity Updates </b>
               <a href="activities.php"><b style="float:right">View All <i class="fa fa-caret-right" aria-hidden="true"></i></b></a>
         </div>

  <div class="card-body ">
  <div class ="table-responsive mt-1">
    
  <?php

$query = "SELECT * FROM activity ORDER BY actid DESC LIMIT 4";
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
   
    ?>

 
    <tr>

    
    <td class="mr-3" >  <?php echo '<img src="Avatar/'.$row['avatar'].'" width="55px;" height="55px"; style="border-radius: 50%;"> <br><br>' ?>  </td>  
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
  </div>
   </div>
     </div>
     <div class="col-md-8 mt-4"> 
      <div class="card ">
         <div class="card-header">
         <b> Recent Documents </b>
               <a href="all.php"><b style="float:right">View All <i class="fa fa-caret-right" aria-hidden="true"></i></b></a>
         </div>

  <div class="card-body ">
  <div class ="table-responsive mt-1">
    
  <?php

$query = "SELECT * FROM filemanage Where Status='Display' ORDER BY id DESC LIMIT 10";
$query_run = mysqli_query($connection, $query);

?>
<table style="font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  font-size:auto;
  width: 100%;">
 <thead>
    <tr>
        <th></th>
        <th>Titles</th>
        <th >Created</th>

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
 
    <tr>

    
        <td> <?php if($row['access']=="pdf"){
         ?>
          <i class="fa fa-file-pdf-o" aria-hidden="true" style="color:red; font-size:25px"></i>
          <?php
        } elseif($row['access']=="xlsx"){
?>         <i class="fa fa-file-excel-o" aria-hidden="true" style="color:green; font-size:25px"></i>
<?php
        }elseif($row['access']=="pptx"){?>         
        <i class="fa fa-file-powerpoint-o" aria-hidden="true" style="color:orange; font-size:25px"></i>
        <?php
         }elseif($row['access']=="docx"){?>         
          <i class="fa fa-file-word-o" aria-hidden="true" style="color:skyblue; font-size:25px"></i>
          <?php
          }
          else{
?>
  <i class="fa fa-file-o" aria-hidden="true" style="color:gray; font-size:25px"></i>
<?php
        }
          
          ?></td>     </td>    <td class="h6 "> <?php echo $row['file']; ?> </td>
        <td  class="text-dark"> <?php

  echo facebook_time_ago($row['created']); 
 
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
  </div>
   </div>
     </div>



 </div> 
 
</div>


			

    

   

    
<?php include('includes/scripts.php');
include('includes/footer.php');
?>
 

