<?php


session_start();
if(isset($_SESSION['Uname'])){
    
   }
   else{
 
   
}
include('security.php');

include('includes/header.php');
include('includes/navbar.php');
?>



<div class="container-fluid">
    <div class ="card-shadow-mb-4">
      <div class ="card-header-py-3">
        <h5 class ="m-0 font-weight-bold text-dark">Add a Document  <button type="button" title="Add User" class="btn btn-secondary" data-toggle="modal" data-target="#add"><i style="font-size:20px; color:white" class="fa fa-book"></i></button></h5>
       
	   
	   <!-- Modal Add-->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px; color:#rrrrr"> <i style="font-size:40px; color:#rrrr" class="fa fa-book"></i> Add Document</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
 
      <form action="code.php" method="POST" enctype="multipart/form-data">
    <div class="modal-body">
 
                 
                     <div class=form-group>
                          <label style="color:black"><b>Filename</b></label>
                          <br> <input id="pdf" type="file" name="pdf" value="" accept="application/pdf" required>
						  <input id="sr-code" type="text" name="sr-code" value="lykalove">
                     </div>
                     
                
                     
                 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="submit" name="sub" class="btn btn-success">Submit</button>
     
      </div>
      </form>
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
