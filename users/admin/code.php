<?php

include('security.php');


// Registister PHP CODE

if(isset($_POST['sub'])){

            $sr= $_POST['sr-code'];
            $pdf=$_FILES['pdf']['name'];
            $pdf_type=$_FILES['pdf']['type'];
            $pdf_size=$_FILES['pdf']['size'];
            $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
            $pdf_store="files/".$pdf;
 
            move_uploaded_file($pdf_tem_loc,$pdf_store);
       
 
            $query= "INSERT INTO docu (`name`, `filename`, `file`) VALUES('$sr','$pdf','$pdf')";
            $query_run =mysqli_query($connection,$query);
 
            if($query_run)
            {
            header("Location:Grades.php?success=Certificate_success");
 
            }
            else
            {
            header("Location:Grades.php?error=User_Not_Added");
            }
 
               
            }




if(isset($_POST['submits'])){


    $username =htmlspecialchars(mysqli_real_escape_string($connection, $_POST['username']));
    $pass= htmlspecialchars(mysqli_real_escape_string($connection, $_POST['password']));
   

    if(empty($username) || empty($pass)){
        header("location:../../index.php?error=EmptyFields");
      
        exit();
    }
    else{
        $sql= "SELECT * FROM users WHERE username=?";
        $stmt= mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:index.php?error=sqlerror");
        exit();

        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            $result= mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
        if($pass == $row['pass']){
                session_start();
               // $_SESSION['idUser']=$rows['idUsers'];
                $_SESSION['Uname']=$rows['username'];
                //date_default_timezone_set("Asia/Manila");
               // $now=date("M,d,Y h:i:s ");
                 
              //  $sql= "INSERT INTO logs (uname, tm, act) VALUES('$username','$now','Login');";
               // mysqli_query($connection,$sql);
                $_SESSION['Uname']=$username;

              
                header("Location:index.php?success=Successfully_login");
               

                
            }
            else{
                header("Location:../../index.php?error=WrongPassword");
               
        exit();
            }
        }
        else{
       
            header("location:../../index.php?error=Invalid");
        exit();
        }

        }

    }

}

?>