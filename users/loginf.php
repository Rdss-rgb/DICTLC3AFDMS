<?php 
   
   include('admin/security.php');

  $regex1 = "/^[0][9]\d{9}$/"; //CONTACT NUMBER
  $regexname="/([A-ZÀ-ÿ][-,a-z. ']+[ ]*)/";

 if(isset($_POST['register'])){
  

$lname =$_POST['Lname'];
$fname =$_POST['Fname'];
$cnum =$_POST['cnum'];
$date =$_POST['date'];
$email =$_POST['email'];
$uname =$_POST['username'];
$pass =$_POST['password'];


$sql_u = "SELECT * FROM users WHERE username='$uname'";
$res_u = mysqli_query($connection, $sql_u);

if (mysqli_num_rows($res_u) > 0) {
 
    header('Location:dictregister.php?error=Username_Already_Taken');	
  }
   else if(!preg_match($regex1,$cnum)){
    header('Location:dictregister.php?error=InvalidFormat');
   }
  

       else{

        
           $query= "INSERT INTO  users (`Lname`, `Fname`, `Cnum`, `Bday`, `email`, `username`, `pass`, `Status`, `avatar`,`role`) VALUES('$lname','$fname','$cnum','$date','$email','$uname','$pass','Inactive','def.png','Staff')";
           $query_run =mysqli_query($connection,$query);

           if($query_run)
           {
               header("Location:dictregister.php?success=Successfully_Registered");

           }
           else
           {
            header("Location:dictregister.php?error=User_Not_Added");
           }

            
     
   }
}
