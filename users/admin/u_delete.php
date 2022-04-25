<?php
session_start();
if(isset($_SESSION['Uname'])){
    
   }
   else{
     
 header('location:../../index.php');
   
}
include('security.php');

include('includes/header.php');
include('includes/navbar.php');
?>



<div class="container-fluid">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style=" background-color:#002642" >
        <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px; color: white; font-weight:bold;"> <i style="font-size:30px; color: #4e73df" class="fa fa-trash"></i> Confirm Delete</h5>
        <a href="user_main.php">
        <button type="button" class="close" aria-label="Close" style="color:white" >
          <span aria-hidden="true">&times;</span>
        </button></a>
      </div>
      <div class="modal-body">
         
           <?php
           if(isset($_GET['delete'])){
                 $d=$_GET['delete'];
         

       
                 $query="SELECT * FROM users WHERE username='$d'";
                 $query_run=mysqli_query($connection,$query);

                  foreach($query_run as $row)  
                   {

                   }
                   
                   
                  
            echo "<p style=font-size:18px;color:black;>This action cannot be undone. Are you sure you want to remove </p> ".' <img src="Avatar/'.$row['avatar'].'" width="150px;" height="150px"; alt="Image" style="display: block;
            margin-left: auto;
            margin-right: auto;
             border-radius: 50%;"><center style="font-size:20px; color:black">&nbsp;&nbsp;'. $d .'?</center><br><br>';}?>


    
      </div>
      <div class="modal-footer"> 
                   <form action="code.php?deletestud=<?php echo $d?>" method="POST">
                       <button type="submit" name="deletebtn" class="btn btn-danger">Delete</button>
                  </form>
                  <a href="user_main.php"><button type="button" class="btn btn-secondary" >Cancel</button></a>

      </div>
    </div>
  </div>
</div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
