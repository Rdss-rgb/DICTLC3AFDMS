<?php

session_start();
if(isset($_SESSION['Uname'])){
    
   }
   else{
     
 header('location:../../index.php');
   
}

include('includes/header.php');
include('includes/navbar.php');
?>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
