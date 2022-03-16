<?php 

session_start();
if(isset($_SESSION['Uname'])){
    
   }
   else{
     
 header("../../index.php");
   
}


include('includes/header.php');
include('includes/navbar.php');

?>
<style>
.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 120px;
    border-radius: 5px;
    transition: .3s linear all;

  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px gray;
    transition: .3s linear all;
    cursor: pointer;
  }


  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
  .stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    pointer-events: auto;
    content: "";
    background-color: rgba(0,0,0,0);
}</style>
<?php
	          	$fullUrl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	      if(strpos($fullUrl,"?success=Successfully_login")==true){
		  ?>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>swal({
  title: "LOGIN SUCCESSFUL",
  text: "You have successfully signed into your account.",
  icon: "success",
  button: "Ok",
});</script>
      <?php
			
        }
        else if(strpos($fullUrl,"?error=Invalid")==true){ ?>
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>swal({
  title: "User does not exist!",
  text: "The user ID you entered does not Exist. Please check that you have typed your user ID correctly.",
  icon: "warning",
  button: "Ok",
});</script>
       <?php
			
        }
        else if(strpos($fullUrl,"?error=EmptyFields")==true){ ?>
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>swal({
  title: "Error!",
  text: "Please Enter Username and Password",
  icon: "error",
  button: "Ok",
});</script>
        <?php
          }
		else{
			
		}
  ?>

<div class="container-fluid">
  
<h1 class="h3 mb-0 text-gray-800">Dashboard</h1> <br>
<div class="row"> 
    <div class="col-md-3">  
      <div class="card-counter text-white bg-primary">
        <i class="fa fa-users"></i>
        <span class="count-numbers">12</span>
        <span class="count-name">Department</span><br>
        <a href="#" class="stretched-link"></a>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter text-white bg-warning">
        <i class="fa fa-archive"></i>
        <span class="count-numbers">99</span>
        <span class="count-name">Archive</span><br>
        <a href="archive.php" class="stretched-link"></a>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter text-white bg-danger">
        <i class="fa fa-database"></i>
        <span class="count-numbers">75</span>
        <span class="count-name">Document Files</span><br>
        <a href="add.php" class="stretched-link"></a>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter text-white bg-info">
        <i class="fa fa-folder"></i>
        <span class="count-numbers">35</span>
        <span class="count-name">Document Files</span><br>
        <a href="manage.php" class="stretched-link"></a>
      </div>
    </div>
  </div>




<div class="row">
  <div class="col-sm-4">
 
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Department</h5>
        <p class="card-text">0</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Documents</h5>
        <p class="card-text">0</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Archives</h5>
        <p class="card-text">0</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>


<div class="cardBox">
          <div class="card">
               <div>
               <div class="numbers">               <?php 
    // require 'db.php';

   //  $sql="SELECT * FROM users where user_type='QA' "; 
    // $query_run=mysqli_query($conn,$sql);
      
    // $row=mysqli_num_rows($query_run);
      
   // $sql="SELECT * FROM users where user_type='Dean' "; 
  //   $query_run=mysqli_query($conn,$sql);

    // $row1=mysqli_num_rows($query_run);
//
    // $sql="SELECT * FROM users where user_type='Staff' "; 
   //  $query_run=mysqli_query($conn,$sql);
//
    // $row2=mysqli_num_rows($query_run);

    // $sql="SELECT * FROM users where user_type='Faculty' "; 
    // $query_run=mysqli_query($conn,$sql);
    
    // $row3=mysqli_num_rows($query_run);

    // $total=$row+$row1+$row2+$row3;

     //echo $total;
   ?></div>
              
                 <?php 
    // require 'db.php';

    
     //$sql="SELECT * FROM students "; 
     //$query_run=mysqli_query($conn,$sql);
      
     //$row=mysqli_num_rows($query_run);

    // echo $row;
   ?>          
                  <?php 
    // require 'db.php';

    
     //$sql="SELECT * FROM users where user_type='Evaluator' "; 
     //$query_run=mysqli_query($conn,$sql);
      
     //$row=mysqli_num_rows($query_run);

    // echo $row;
   ?>
              




<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>


<?php
 
 $dataPoints1 = array( 
    array("y" => 537, "label" => ".PDF" ),
    array("y" => 334, "label" => ".XLSX" ),
    array("y" => 250, "label" => ".PPT" ),
    array("y" => 20, "label" => ".TXT" ),
    array("y" => 126, "label" => ".CSV" ),
    array("y" => 57, "label" => ".OTD" ),
    array("y" => 550, "label" => ".DOCX" )
 );
  
 ?>
 

<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Total Number of File types"
	},
	axisY: {
		title: "Number of File types"
	},
	data: [{
		type: "pie",
		yValueFormatString: "# Files",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

var chart1 = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Total Number of File types"
	},
	axisY: {
		title: "Number of File types"
	},
	data: [{
		type: "column",
		yValueFormatString: "# Files",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart1.render();
}
</script>

<div class="row">
  <div class="col-lg-6">
<div id="chartContainer" style="height: 370px; width: 100%;"></div><br><br><br><br>
</div>


  <div class="col-lg-6">

<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
</div>
</div>

</div>

</div>

   

    
<?php include('includes/scripts.php');
include('includes/footer.php');
?>
 

