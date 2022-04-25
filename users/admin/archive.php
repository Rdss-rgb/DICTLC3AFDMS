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
        <h5 class ="m-0 font-weight-bold text-dark-100">Archive Documents</h5>

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
        <td> <?php echo $row['file']; ?> </td>
        <td> <?php
$path_info = pathinfo($docxfile);
echo $path_info['extension'];

?> </td>
       
        <td><a href="code.php?dl=<?php echo $row['id'];?>" class='btn btn-success'><i   class="fa fa-download" aria-hidden="true"></i> Download</a></td>


        <td><a href="code.php?unarchive=<?php echo $row['id'];?>" class='btn btn-warning arc-btn'><i class="fa fa-archive" aria-hidden="true"></i> Unarchive</a></td>
    

        <td><a href="code.php?delete=<?php echo $row['id'];?>" class='btn btn-danger arc-btn1'><i   class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
       

       
    </tr>

    
     <?php
  }


 } 
 else{
  echo "NO RECORD FOUND";
 }
 ?>
    
    <?php 
    if(isset($_GET['m'])){ ?>
    <div class="flash-data" data-flashdata="<?php echo $_GET['m'];?>"></div>
    <?php } ?>
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
