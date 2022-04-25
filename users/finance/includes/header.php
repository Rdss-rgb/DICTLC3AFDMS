<?php include('security.php');?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DICT Luzon Cluster 3 Admin and Finance DMS</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link rel="icon" href="img/dicticon.ico" type="image/x-icon" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/print.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link href= "https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap4.min.css" rel="stylesheet">
   


  
  <script src="./include/jquery/jquery-1.12.4.min.js"></script>
  <script src="./include/jquery_ui/jquery-ui.min.js"></script>
  <!-- ################################ For files reder ###############################-->
  <!--PDF-->
  <link rel="stylesheet" href="./include/pdf/pdf.viewer.css">
  <script src="./include/pdf/pdf.js"></script>
  <!--Docs-->
  <script src="./include/docx/jszip-utils.js"></script>
  <script src="./include/docx/mammoth.browser.min.js"></script>
  <!--PPTX-->
  <link rel="stylesheet" href="./include/PPTXjs/css/pptxjs.css">
  <link rel="stylesheet" href="./include/PPTXjs/css/nv.d3.min.css">
  <script type="text/javascript" src="./include/PPTXjs/js/filereader.js"></script>
  <script type="text/javascript" src="./include/PPTXjs/js/d3.min.js"></script>
  <script type="text/javascript" src="./include/PPTXjs/js/nv.d3.min.js"></script>
  <script type="text/javascript" src="./include/PPTXjs/js/pptxjs.js"></script>
  <script type="text/javascript" src="./include/PPTXjs/js/divs2slides.js"></script>
  <!--All Spreadsheet -->
  <link rel="stylesheet" href="./include/SheetJS/handsontable.full.min.css">
  <script type="text/javascript" src="./include/SheetJS/handsontable.full.min.js"></script>
  <script type="text/javascript" src="./include/SheetJS/xlsx.full.min.js"></script>
  <!--Image viewer-->
  <link rel="stylesheet" href="./include/verySimpleImageViewer/css/jquery.verySimpleImageViewer.css">
  <script type="text/javascript" src="./include/verySimpleImageViewer/js/jquery.verySimpleImageViewer.js"></script>
  <!--officeToHtml-->
  <script src="./include/officeToHtml/officeToHtml.js"></script>
  <link rel="stylesheet" href="./include/officeToHtml/officeToHtml.css">

<script type="text/javascript">
window.addEventListener('load',function(){
  document.querySelector('body').classList.add("loaded")  
});
</script>
</head>






<body style="color:black">
<?php
	          	$fullUrl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	      if(strpos($fullUrl,"?success=Successfully_login")==true){
		  ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
<script>
const Toast = Swal.mixin({
  toast: false,
  showConfirmButton: false,
  timer: 2000,
 
})

Toast.fire({
  color:'#8abb6f',
  icon: 'success',
  title: 'Login successfully',
  text: "You have successfully signed into your account.",
})

</script>
      <?php
			
        }
        else if(strpos($fullUrl,"?Status=add")==true){
          ?>
           <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
           <script>
const Toast = Swal.mixin({
  toast: false,
  showConfirmButton: false,
  timer: 2000,
 
})

Toast.fire({
  color:'#8abb6f',
  icon: 'success',
  title: 'Document Successfully Added!',
})

</script>
    
          <?php
          
            }
            else if(strpos($fullUrl,"?errorr=add")==true){ ?>
              <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>swal({
      title: "Error",
      text: "Document cannot be Added!",
      icon: "error",
      button: "Ok",
    });</script>
                      <?php
                          }
      
		else{
			
		}
  ?>

    <!-- Page Wrapper -->
    <div id="wrapper">