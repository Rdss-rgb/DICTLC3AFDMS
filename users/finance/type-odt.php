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
include('lfrupload/pdfparser/alt_autoload.php-dist');
include('ry.php');
?>


<a class = "p-2 font-weight-bold text-primary mb-4" href="type-storage.php"><i class="fas fa-angle-double-left"></i> GO BACK TO THE PREVIOUS  PAGE</a>
<div class="container-fluid mt-4">
    <div class ="card-shadow-mb-4">
      <div class ="card-header-py-3">
        <h5 class ="m-0 font-weight-bold text-dark-100">ODT/ODF Files</h5>
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

$query = "SELECT * FROM filemanage WHERE access IN ('odt') ORDER BY id"; 
$query_run = mysqli_query($connection, $query);

?>
<table  id="DataTableYep" class = "table table-boardered" width="100%" cellspacing="0" style = "color:black">
 <thead>
    <tr>
        <th>ID </th>
        <th>File Name</th>
        <th>FileType</th>
        <th>Meta Data</th>
        <th>Contents</th>
        <th>Filesize</th>
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
<td> <?php echo $row['id']; ?> </td>
<td> <?php echo $row['file']; ?> </td>
<td> <?php echo $row['access']; ?> </td>

<td>  <?php



?>
 </td>
<td> <?php

$parser = new \Smalot\PdfParser\Parser();
$pdf = $parser->parseFile($docxfile);

$text = $pdf->getText();
echo $text;
?>
 </td>
<td> <?php

$file = $docxfile;
$filesize = filesize($file); // bytes

$total = formatBytes    ($filesize);
echo $total;
?> </td>
<td>
        <form action="#" method= "post">
        <input type="hidden" name = "edit_id" value = "<?php echo $row['id']; ?>">
        <button type ="submit" name="edit_btn" class = "btn btn-success">Download</button>
        </form>
        </td>

        <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="adddelete_btn" class="btn btn-danger"> DELETE</button>
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
 </tbody>
 </table>

</div>
</div>
</div>
</div>
</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
