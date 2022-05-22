<?php

session_start();
if(isset($_SESSION['Uname'])){
    
   }
   else{
     
 header('location:../../index.php');
   
}
include("docx_metadata.php");
require("class.filetotext.php");
include('includes/header.php');
include('includes/navbar.php');
include('ry.php');
?>
       <div class="loader-wrapper">
  <div class="loader"></div>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
</div>

<a class = "p-2 font-weight-bold text-primary mb-4" href="type-storage.php"> Admin Division Document Storage</a><i class="fas fa-angle-right  font-weight-bold text-primary " ></i> <label class = " font-weight-bold text-dark mb-4">Microsoft Documents</label>
<div class="container-fluid mt-4">
    <div class ="card-shadow-mb-4">
      <div class ="card-header-py-3">
        <h5 class ="m-0 font-weight-bold text-dark-100">Microsoft Documents</h5>
        </div></div>
</div>

<div class="container-fluid">
<?php

?>
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

$query = "SELECT * FROM filemanage WHERE status='Display' && access IN (('docx'),('xlsx'),('doc'),('pptx')) ORDER BY id"; 
$query_run = mysqli_query($connection, $query);

?>
<table  id="DataTableYep2" class = "table table-boardered" width="100%" cellspacing="0" style = "color:black">
 <thead>
    <tr>
        <th>ID </th>
        <th>File Name</th>
        <th>Modified Time</th>
        <th>Created Time</th>
        <th>Contents</th>
        <th>Filesize</th>
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

<td> <?php  $docxmeta->setDocument($docxfile);
 $datez = $docxmeta->getDateModified();
 $newDate2   =   date("l M, d, Y", strtotime($datez));
 echo "<strong> Date Modified : ". $newDate2; ?> </td>
<td> <?php  $docxmeta->setDocument($docxfile);
$datec = $docxmeta->getDateCreated();
        $newDate  =   date("l M, d, Y", strtotime($datec));
        echo "<strong> Date Created : ". $newDate ; ?> </td>
 <td> <?php  $docObj = new Filetotext($docxfile);
            $return = $docObj->convertToText();
            echo $return; ?> </td>

<td> 
<?php

$file = $docxfile;
$filesize = filesize($file); // bytes

$total = FileSizeConvert($filesize);
echo $total;
?>
 </td>
 <td>
        <form action="view-docx.php" method= "post">
        <input type="hidden" name = "edit_id" class="demos" data-file="Letter.docx" value = "<?php echo $row['id']; ?>">
        <button type ="submit" name="edit_btn" class = "btn btn-success">View</button>
        </form>
        </td>
        <td>
        <form action="Dl.php" method= "post">
        <input type="hidden" name = "edit_id" value = "<?php echo $row['id']; ?>">
        <button type ="submit" name="edit_btn" class = "btn btn-success">Download</button>
        </form>
        </td>

        <td><a href="code.php?delete1=<?php echo $row['id'];?>" class='btn btn-danger arc-btn1'><i   class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
       
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
