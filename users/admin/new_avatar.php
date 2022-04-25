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
<style>#loader-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
}
#loader {
    display: block;
    position: relative;
    left: 50%;
    top: 50%;
    width: 150px;
    height: 150px;
    margin: -75px 0 0 -75px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #1529db;

    -webkit-animation: spin 2s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
    animation: spin 2s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */

    z-index: 1001;
}

    #loader:before {
        content: "";
        position: absolute;
        top: 5px;
        left: 5px;
        right: 5px;
        bottom: 5px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #d31f0b;

        -webkit-animation: spin 3s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
        animation: spin 3s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
    }

    #loader:after {
        content: "";
        position: absolute;
        top: 15px;
        left: 15px;
        right: 15px;
        bottom: 15px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #f9c922;

        -webkit-animation: spin 1.5s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
          animation: spin 1.5s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
    }

    @-webkit-keyframes spin {
        0%   { 
            -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(0deg);  /* IE 9 */
            transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
        }
        100% {
            -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(360deg);  /* IE 9 */
            transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
        }
    }
    @keyframes spin {
        0%   { 
            -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(0deg);  /* IE 9 */
            transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
        }
        100% {
            -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(360deg);  /* IE 9 */
            transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
        }
    }

    #loader-wrapper .loader-section {
        position: fixed;
        top: 0;
        width: 51%;
        height: 100%;
        background: #fafafa;
        z-index: 1000;
        -webkit-transform: translateX(0);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: translateX(0);  /* IE 9 */
        transform: translateX(0);  /* Firefox 16+, IE 10+, Opera */
    }

    #loader-wrapper .loader-section.section-left {
        left: 0;
    }

    #loader-wrapper .loader-section.section-right {
        right: 0;
    }

    /* Loaded */
   
    
    .loaded #loader {
        opacity: 0;
        -webkit-transition: all 0.3s ease-out;  
                transition: all 0.3s ease-out;
    }
    .loaded #loader-wrapper {
        visibility: hidden;
        opacity: 0;
        -webkit-transition: all 0.3s  ease-in;  
        transition: visibility 0s 0.7s, opacity 0.3s linear;
            
    }
    </style>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>
<div class="container-fluid">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style=" background-color:#002642" >
        <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px; color: white; font-weight:bold;"> <i style="font-size:30px; color: #4e73df" class="fa fa-user"></i> Update Avatar</h5>
        <button type="button" class="close" aria-label="Close" style="color:white " onclick="history.back()">
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
<div id="selectedBanner" style="display: flex; margin-left: auto;margin-right: auto;width: 40%;"></div> <br>
<div class="form-group">
          
  <input type="file" name="fileToUpload" id="fileToUpload" value="" class="form-control" accept=".jpg, .jpeg, .png" required>

  <input type="hidden" name="users1" id="users1" value="<?php echo  $sr?>">
  </div>


    
      </div>
      <div class="modal-footer"> 
              
    <button type="button" class="btn btn-primary" onclick="history.back()">Close</button>
        <button type="submit" id="avatarupt" name="avatarupt" class="btn btn-success"> Update</button>
  
  </form>

      </div>
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
