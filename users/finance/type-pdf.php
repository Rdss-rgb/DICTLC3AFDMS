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


<a class = "p-2 font-weight-bold text-primary mb-4" href="type-storage.php"> Admin Division Document Storage</a><i class="fas fa-angle-right  font-weight-bold text-primary " ></i> <label class = " font-weight-bold text-dark mb-4">PDF Files</label>
<div class="container-fluid mt-4">
    <div class ="card-shadow-mb-4">
      <div class ="card-header-py-3">
        <h5 class ="m-0 font-weight-bold text-dark-100">PDF Files <i class="fa-solid fa-car-bolt"></i></h5>
        </div></div>
</div>

<div class="container-fluid">
    <div class ="card-shadow-mb-4">
    <div class ="card-header-py-3">

<div class="card-body">
<?php
// Snippet from PHP Share: http://www.phpshare.org

function FileSizeConvert($bytes)
{
    $bytes = floatval($bytes);
        $arBytes = array(
            0 => array(
                "UNIT" => "TB",
                "VALUE" => pow(1024, 4)
            ),
            1 => array(
                "UNIT" => "GB",
                "VALUE" => pow(1024, 3)
            ),
            2 => array(
                "UNIT" => "MB",
                "VALUE" => pow(1024, 2)
            ),
            3 => array(
                "UNIT" => "KB",
                "VALUE" => 1024
            ),
            4 => array(
                "UNIT" => "B",
                "VALUE" => 1
            ),
        );

    foreach($arBytes as $arItem)
    {
        if($bytes >= $arItem["VALUE"])
        {
            $result = $bytes / $arItem["VALUE"];
            $result = str_replace(".", "," , strval(round($result, 2)))." ".$arItem["UNIT"];
            break;
        }
    }
    return $result;
}
?>


<div class ="table-responsive">
    
<?php

$query = "SELECT * FROM filemanage WHERE access IN ('pdf') ORDER BY id"; 
$query_run = mysqli_query($connection, $query);

?>
<table  id="DataTableYep" class = "table table-boardered" width="100%" cellspacing="0" style = "color:black">
 <thead>
    <tr>
        <th>ID</th>
        <th>File Name</th>
        <th>FileType</th>
        <th>Meta Data</th>
        <th>File Size</th>
        <th>View</th>
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
<td> </td>
<td> <?php

$parser = new \Smalot\PdfParser\Parser();
$pdf = $parser->parseFile($docxfile);

$text = $pdf->getText();
echo mb_strimwidth($text,0 ,3000, "...");
?>
 </td>
<td> <?php

$file = $docxfile;
$filesize = filesize($file); // bytes

$total = FileSizeConvert($filesize);
echo $total;
?> </td>
<td>
        <form action="view.php" method= "post">
        <input type="hidden" name = "edit_id" value = "<?php echo $row['id']; ?>">
        <button type ="submit" name="edit_btn" class = "btn btn-success">View</button>
        </form>
        </td>
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
