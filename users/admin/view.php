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
<a class = "p-2 mb-4 font-weight-bold text-primary"href="type-pdf.php"><i class="fas fa-angle-double-left"></i> GO BACK TO THE PREVIOUS  PAGE</a>
    <!-- DataTales Example -->
            <h6 class="m-0 font-weight-bold text-dark mt-3 mb-3"> View Document </h6>
        </div>
        <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM filemanage WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                        <?php 
                        $filename = $row['file'];
                        ?>
                        <?php
    
echo "<iframe src=\"lfupload/$filename\" width=\"100%\" style=\"height:500%\"></iframe>";

?>

                        
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

