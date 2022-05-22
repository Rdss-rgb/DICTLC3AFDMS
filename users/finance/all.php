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
        <h5 class ="m-0 font-weight-bold text-dark-100">All Documents</h5>

<div class="card-body">


<div class ="table-responsive">
    
<?php

$query = "SELECT * FROM filemanage where status='Display' ORDER BY id DESC";
$query_run = mysqli_query($connection, $query);

?>
<table  id="DataTableYepi" class = "table table-boardered" width="100%" cellspacing="0" style = "color:black">
 <thead>
    <tr>
    <th>ID</th>
        <th>File Name</th>
        <th>File Type</th>
        <th>Download</th>
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
</div>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
