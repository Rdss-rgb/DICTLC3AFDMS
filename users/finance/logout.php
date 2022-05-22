<?php

session_start();

include('security.php');
if(isset($_POST['logout_btn']))
{

    $username=$_SESSION['Uname'];
    date_default_timezone_set("Asia/Manila");
    $now=date("F j, Y, H:i:s");
      
    $sql1= "INSERT INTO history (Uname,act,Dt) VALUES('$username','$now','Logout')";
    mysqli_query($connection,$sql1);
    session_destroy();
    unset($_SESSION['username']);
    header('Location: ../../index.php');
}

?>