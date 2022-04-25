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
  
<h1 class="h4  text-grey-800">Dashboard</h1> 
<div class="row"> 
<div class="col-md-4">
      <div class="card-counter text-white  card border bg-info">
        <i class="fa fa-folder" style="color:white;"></i>
        <span class="count-numbers">   <?php 
     require 'security.php';

    
     $sql="SELECT * FROM filemanage "; 
     $query_run=mysqli_query($connection,$sql);
      
     $row=mysqli_num_rows($query_run);

     echo $row;
   ?> </span>
        <span class="count-name">Documents</span><br>
        <a href="#" class="stretched-link"></a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card-counter text-white card border bg-warning" >
        <i class="fa fa-archive" style="color:white"></i>
        <span class="count-numbers">99</span>
        <span class="count-name">Archive</span><br>
        <a href="archive.php" class="stretched-link"></a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card-counter text-white card border bg-danger">
        <i class="fa fa-database" style="color:white;"></i>
        <span class="count-numbers">75</span>
        <span class="count-name">Document Files</span><br>
        <a href="add.php" class="stretched-link"></a>
      </div>
    </div>

    
    
  </div>
 
  <div class="row">
  <div class="col-md-9 mt-4">  <div class="card ">
  <div class="card-header">
  Recent Documents 
  <a href="all.php"><b style="float:right">View All <i class="fa fa-caret-right" aria-hidden="true"></i></b></a>
  </div>
  <div class="card-body ">
  <div class ="table-responsive mt-1">
    
<?php

$query = "SELECT * FROM filemanage ORDER BY id DESC LIMIT 10";
$query_run = mysqli_query($connection, $query);

?>
<table style="font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  font-size:19px;
  width: 100%;">
 <thead>
    <tr>
        <th></th>
        <th>Titles</th>
        <th>Created</th>
    
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
          
          ?> </td>    <td> <?php echo $row['file']; ?> </td>
        <td> <?php echo $row['created']; ?> </td>
       
    
       
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
 
</div></div>
 <div class="col-md-3 mt-4">  
    
 

<div class="card ">
  <div class="card-header">
Document types
  </div>
            <div class="chart">
    <canvas id="myChart4"></canvas>
</div>
</div>


  </div>
  
  </div>
 </div> 
 
</div>







   

    
<?php include('includes/scripts.php');
include('includes/footer.php');
?>
 

