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
include('ry.php');
?>

  
<div class="container-fluid">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style=" background-color:#002642" >
        <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px; color: white; font-weight:bold;"> <i style="font-size:30px; color: #4e73df" class="fa fa-user"></i> Update Avatar</h5>
  
        <button type="button" class="close" aria-label="Close" onclick="history.back()" style="color:white" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
           <?php
           if(isset($_GET['update_avatar'])){
                 $d=$_GET['update_avatar'];
         

       
                 $query="SELECT * FROM users WHERE username='$d'";
                 $query_run=mysqli_query($connection,$query);

                  foreach($query_run as $row)  
                   {

                   }
                   
                }
                  
        ?>
      <form action="code.php" method="POST" enctype="multipart/form-data">
<div id="selectedBanner" style="display: block; margin-left: auto;margin-right: auto;width: 40%;"></div> <br>
<div class="form-group">
          
  <input type="file" name="fileToUpload" id="fileToUpload" value="" class="form-control" accept=".jpg, .jpeg, .png" required>

  <input type="hidden" name="users1" id="users1" value="<?php echo  $d?>">
  </div>


    
      </div>
      <div class="modal-footer"> 
              
   <button type="button" onclick="history.back()" class="btn btn-primary" >Close</button>
        <button type="submit" id="avatarupt1" name="avatarupt1" class="btn btn-success"> Update</button>
  
  </form>

      </div>
    </div>
  </div>
</div>
<script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script>
      var selDiv = "";
      var storedFiles = [];
      $(document).ready(function () {
        $("#fileToUpload").on("change", handleFileSelect);
        selDiv = $("#selectedBanner");
      });

      function handleFileSelect(e) {
        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        filesArr.forEach(function (f) {
          if (!f.type.match("image.*")) {
            return;
          }
          storedFiles.push(f);

          var reader = new FileReader();
          reader.onload = function (e) {
            var html =
              '<img src="' +
              e.target.result +
              "\" data-file='" +
              f.name +
              "alt='Category Image' height='200px' width='200px'>";
            selDiv.html(html);
          };
          reader.readAsDataURL(f);
        });
      }
    </script>
	<script src="../../css/main.js"></script>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
