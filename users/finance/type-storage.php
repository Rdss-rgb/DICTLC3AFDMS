<?php


session_start();
if(isset($_SESSION['Uname'])){
    
   }
   else{
     
 header('location:../../index.php');
   
}


include('includes/header.php');
include('includes/navbar.php');
?><style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  background-color: #f1f1f1;
}
.card:hover{
    box-shadow: 4px 4px 20px gray;
    transition: .2s linear all;
    cursor: pointer;
  }
</style>
<body>

<div class="container-fluid text-dark-100">
<h5 class ="m-0 font-weight-bold text-dark-100 mb-5">Admin Division Document Storage</h5>


  <div class="container mt-2 mb-4">

  <h5 class ="m-0 font-weight-bold text-dark-100 mb-3">Document Type</h5>

        <div class="row ">
  <div class="col-lg-4">
  <a class="btn" type="button" href="type-micro.php">
    <div class="card border-dark mb-2 " style="min-height:30vh; ">
    <div class="card-header"> 
      <img src="img/fl1.png" class="card-img-top" height="170px" alt="...">
      <h5 class="card-title text-dark">Microsoft Document Files</h5>
    </div>
      <div class="card-body">
        <p class="card-text text-dark">This storage includes Microsoft Document Files 
        .DOCX,XLSX & PPTX are available for viewing</p>
      </div>
    </div>
  </a>
  </div>

  <div class="col-lg-4">
  <a class="btn" type="button" href="type-pdf.php">
    <div class="card border-dark mb-2 " style="min-height:30vh">
    <div class="card-header"> 
       <img src="img/imgtry.png" height="170px"  class="card-img-top" alt="...">
       <h5 class="card-title text-dark">PDF Files</h5>
    </div> 
      <div class="card-body">
        <p class="card-text text-dark">This storage includes Portable Document Format file .PDF Files are available for viewing.</p>
      </div>
    </div>
  </a>
  </div>
  <div class="col-lg-4">
  <a class="btn" type="button" href="type-other.php">
    <div class="card border-dark mb-2 " style="min-height:30vh">
    <div class="card-header"> 
       <img src="img/fl3.png" height="170px"  class="card-img-top" alt="...">
       <h5 class="card-title text-dark">Other Files Types</h5>
    </div> 
      <div class="card-body">
        <p class="card-text text-dark">This storage includes Other Document File Types such as( TIF,PPT ,CSV ,ODT ,ODF ,PUB ).</p>
      </div>
    </div>
  </a>
  </div>



 

  </div>

  </div>

  </div>

</div>
  </body>


<?php
include('includes/scripts.php');
include('includes/footer.php');

?>