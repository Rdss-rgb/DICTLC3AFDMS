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


<a class = "p-2 font-weight-bold text-primary mb-4" href="type-storage.php"> Admin Division Document Storage</a><i class="fas fa-angle-right  font-weight-bold text-primary " ></i> <label class = " font-weight-bold text-dark mb-4">Other File Type Documents</label>
<div class="container-fluid mt-4">
    <div class ="card-shadow-mb-4">
      <div class ="card-header-py-3">
        <h5 class ="m-0 font-weight-bold text-dark-100">Other File Types</h5>
        </div></div>
</div>

<div class="container-fluid">
    <div class ="card-shadow-mb-4">
    <div class ="card-header-py-3">

<div class="card-body">
<?php
// Snippet from PHP Share: http://www.phpshare.org

function formatBytes($bytes, $precision = 2) { 
        $units = array('B', 'KB', 'MB', 'GB', 'TB'); 
    
        $bytes = max($bytes, 0); 
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
        $pow = min($pow, count($units) - 1); 
    
        // Uncomment one of the following alternatives
        // $bytes /= pow(1024, $pow);
        // $bytes /= (1 << (10 * $pow)); 
    
        return round($bytes, $precision) . ' ' . $units[$pow]; 
    } 
?>


<div class ="table-responsive">
    
<?php

$query = "SELECT * FROM filemanage WHERE status='Display' && access NOT IN (('docx'),('xlsx'),('doc'),('pdf'),('pptx'),('ppt')) ORDER BY id"; 
$query_run = mysqli_query($connection, $query);

?>
<table  id="DataTableYep1" class = "table table-boardered" width="100%" cellspacing="0" style = "color:black">
 <thead>
    <tr>
        <th>File Name</th>
        <th>File Type</th>
        <th>File Size</th>
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
$docxfile = "lfupload/$filename"; 

?>  

<tr>
    
<td> <?php echo $row['file']; ?> </td>
<td> <?php
$path_info = pathinfo($docxfile);
echo $path_info['extension'];

?> </td>
<td>
<?php

$file = $docxfile;
$filesize = filesize($file); // bytes

$total = formatBytes    ($filesize);
echo $total;
?>
</td>



<td>
        <form action="Dl.php" method= "post">
        <input type="hidden" name = "edit_id" value = "<?php echo $row['id']; ?>">
        <button type ="submit" name="edit_btn" class = "btn btn-success">Download</button>
        </form>
        </td>
       

        <td><a href="code.php?delete3=<?php echo $row['id'];?>" class='btn btn-danger arc-btn1'><i   class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
       
       
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
