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
<a class = "p-2 mb-4 font-weight-bold text-primary"href="type-micro.php"><i class="fas fa-angle-double-left"></i> GO BACK TO THE PREVIOUS  PAGE</a>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark"> View Document </h6>
        </div>
        <div class="card-body">
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
                        $docxfile = "../admin/lfupload/$filename";
                        ?>
        <!--<div id="resolte-contaniner" style="display:none;"></div>-->
        <div style="overflow: auto;width: 100%; color:black">
          <div id="resolte-contaniner" style="width: 100%; height:750px; overflow: auto;"></div>
          <p id="resolte-text" style="display:none">Resolte:</p>
        </div>

      </div>
  </div>
  <script>
        var file_path = <?php echo json_encode($docxfile) ?>; 
            $("#resolte-contaniner").officeToHtml({
            url: file_path,
            docxSetting: {
        styleMap : null,
        includeEmbeddedStyleMap: true,
        includeDefaultStyleMap: true,
        convertImage: null,
        ignoreEmptyParagraphs: false,
        idPrefix: "",
        isRtl : "auto" 
    }
            });
        </script>
                        <?php
                }
            }
        ?>
        </div>
   

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
