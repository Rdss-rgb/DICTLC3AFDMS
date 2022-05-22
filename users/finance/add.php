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
?>

<div class="lds-dual-ring"></div>
<div class="container-fluid text-dark-100">
    <div class ="card-shadow-mb-4">
      <div class ="card-header-py-3">
       
        <button type="button" title="Add Document" class="btn btn-success mt-3 mb-3" data-toggle="modal" data-target="#add"> <h5 class ="m-0 font-weight-bold text-dark-100"><i style="font-size:20px; color:white" class="fa fa-plus"></i> Add a Document</h5></button>
 <!-- Modal Add-->
 <h5 class ="m-0 font-weight-bold text-dark-100">Recently Added Files</h5>
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header" style=" background-color:#002642">
      <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px; color: white; font-weight:bold"> <i style="font-size:30px; color: #4e73df" class="fa fa-file"></i>&nbsp; ADD DOCUMENT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
 
      <form action="code.php" method="POST" enctype="multipart/form-data">
    <div class="modal-body">
 

                     <div class=form-group>
                 
                     <label><b>Filename:</b></label>
                          <br> <input id="pdf" type="file" name="pdf" value="" class="form-control"  required>
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

<div class="container-fluid">
    <div class ="card-shadow-mb-4">
    <div class ="card-header-py-3">

<div class="card-body">


<div class ="table-responsive">
    
<?php
$sr=$_SESSION['Uname'];
$query = "SELECT * FROM filemanage Where addby='$sr' ORDER BY id DESC";
$query_run = mysqli_query($connection, $query);

?>
<table  id="DataTableYepp" class = "table table-boardered" width="100%" cellspacing="0" style = "color:black">
 <thead>
    <tr>
        <th>ID </th>
        <th>File Name</th>
        <th>File Type</th>
        <th>Download</th>
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
$docxfile = "../admin/lfupload/$filename"; 

?>  

    <tr>
        <td> <?php echo $row['id']; ?> </td>
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

        <td><a href="code.php?delete4=<?php echo $row['id'];?>" class='btn btn-danger arc-btn1'><i   class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>

       
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
                title: 'Archive Document',
                text: "Are you sure you ?",
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
</div></div></div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
