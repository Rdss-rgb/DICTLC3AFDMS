<?php

include('security.php');


// Registister PHP CODE

include("docx_metadata.php");
require("class.filetotext.php");
 
 
 
if(isset($_POST['sub'])){
            $pdf=$_FILES['pdf']['name'];
            $pdf_type=$_FILES['pdf']['type'];
            $pdf_size=$_FILES['pdf']['size'];
            $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
            $pdf_store="lfupload/".$pdf;
 
            move_uploaded_file($pdf_tem_loc,$pdf_store);
       
            $docxmeta = new docxmetadata();
 
            $path_info = pathinfo("lfupload/".$pdf);
            $atime = $path_info['extension'];
 
            $datec = $docxmeta->getDateModified();
            $newDate  =   date("l M, d, Y", strtotime($datec));
            $mtime = $newDate;
 
 
            //$datec = $docxmeta->getDateCreated();
            //$date = new DateTime($datec);
            //$ctime = ('F j, Y, g:i');
            date_default_timezone_set("Asia/Manila");
            $ctime=date("F j, Y, g:i");
            
 
 
           // $docObj = new Filetotext($pdf_store);
            //$return = $docObj->convertToText();
            //$content = $return;
 
            $query= "INSERT INTO  filemanage (`file`,`access`,`modified`,`created`,`contents`) VALUES('$pdf','$atime','$mtime','$ctime','sd')";
            $query_run =mysqli_query($connection,$query);
 
            if($query_run)
            {
                header('Location:add.php?Status=add');  
            }
            else
            {
                header('Location:add.php?errorr=add');   
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
           
                $position = $row['role'];
                
                if ($position=='Staff')
                {
                    session_start();
                     $_SESSION['idUser']=$rows['idUsers'];
                     $_SESSION['Uname']=$row['username'];
                     date_default_timezone_set("Asia/Manila");
                     $now=date("F j, Y, g:i");
                      
                     $sql2= "INSERT INTO history (Uname,act,Dt) VALUES('$username','$now','Login')";
                     mysqli_query($connection,$sql2);
                     $_SESSION['Uname']=$username;
                     if($row['Status']=='Inactive'){
                        
                      header("Location:../../index.php?error=Account_not_active");
                     }
                     else{
                   
                     header("Location:../finance/index.php?success=Successfully_login");
                    
     
                     }
                }
                else if($position=='Admin'){
                    session_start();
                
                     $_SESSION['Uname']=$row['username'];
                     date_default_timezone_set("Asia/Manila");
                     $now=date("F j, Y, g:i");
                       
                     $sql1= "INSERT INTO history (Uname,act,Dt) VALUES('$username','$now','Login')";
                     mysqli_query($connection,$sql1);
                     $_SESSION['Uname']=$username;
                     if($row['Status']=='Inactive'){
                        
                      header("Location:../../index.php?error=Account_not_active");
                     }
                     else{
                   
                     header("Location:index.php?success=Successfully_login");
                    
     
                     }
                }
                else{
                    header("Location:index.php");
                }
         
          
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




if(isset($_GET['chk'])){

    $but=$_POST['check'];    
    $ss=$_GET['chk'];
        $query= "UPDATE users SET Status='Inactive' WHERE username = '$ss' ";
        $query_run =mysqli_query($connection,$query);
        header("Location:user_main.php?Status=NotActive");
 
}

if(isset($_GET['chk1'])){
 
    $but=$_POST['check'];
    $ss=$_GET['chk1'];
    $query= "UPDATE users SET Status='Active' WHERE username = '$ss' ";
    $query_run =mysqli_query($connection,$query);
    header("Location:user_main.php?Status=Active");

 
}



if(isset($_POST['update_user'])){


    
$regex1 = "/^[0][9]\d{9}$/"; //CONTACT NUMBER
$regex0= "/^[1-9][0-9][-]\d{5}$/"; //27-12343
$regexname="/([A-ZÀ-ÿ][-,a-z. ']+[ ]*)/";

$lname =$_POST['Lname'];
$fname =$_POST['Fname'];
$cnum =$_POST['cnum'];
$date =$_POST['date'];
$email =$_POST['email'];
$uname =$_POST['username'];
$pass =$_POST['password'];





if(!preg_match($regex1,$cnum)){
  header('Location:register.php?error=InvalidFormat');
 }


     else{

      
         $query= "UPDATE  users SET Lname='$lname', Fname='$fname', Cnum='$cnum', Bday='$date', email='$email', pass='$pass' WHERE username = '$uname'";
         $query_run =mysqli_query($connection,$query);

         if($query_run)
         {
          header("Location:register.php?success=Successfully_Updated");

         }
         else
         {
          header("Location:register.php?error=Update_error");
         }

          
        }
 }


if(isset($_POST['Insert'])){

    $regex1 = "/^[0][9]\d{9}$/"; //CONTACT NUMBER
    $regexname="/([A-ZÀ-ÿ][-,a-z. ']+[ ]*)/";
    $regexdate ="/^(((0)[0-9])|((1)[0-2]))(\/)([0-2][0-9]|(3)[0-1])(\/)\d{4}$/";


$lname =$_POST['lname'];
$fname =$_POST['fname'];
$cnum =$_POST['cnum'];
$email =$_POST['email'];
$date =$_POST['date'];
$role =$_POST['ustype'];
$tmp_file = $_FILES['user_images']['tmp_name'];
$avatar=pathinfo($_FILES["user_images"]["name"], PATHINFO_EXTENSION);
$uname =$_POST['username'];
$pass =$_POST['pass'];
$rand = md5(uniqid().rand());
            $post_image = $rand.".".$avatar;

$sql_u = "SELECT * FROM users WHERE username='$uname'";
$res_u = mysqli_query($connection, $sql_u);

if (mysqli_num_rows($res_u) > 0) {
 
    header('Location:user_main.php?error=Username_Already_Taken');	
  }

  else if(!preg_match($regex1,$cnum)){
   header('Location:user_main.php?error=InvalidFormat');
  }

  else if(!preg_match($regexdate,$date)){
    header('Location:user_main.php?error=InvalidDate');
   }
 

      else{

       
          $query= "INSERT INTO  users (`Lname`, `Fname`, `Cnum`, `Bday`, `email`, `username`, `pass`, `Status`, `avatar`,`role`) VALUES('$lname','$fname','$cnum','$date','$email','$uname','$pass','Inactive','$post_image','$role')";
          $query_run =mysqli_query($connection,$query);

          if($query_run)
          {
           
            
            move_uploaded_file($tmp_file,"Avatar/".$post_image);
             
              header("Location:user_main.php?success=Successfully_Registered");

          }
          else
          {
           header("Location:user_main.php?error=User_Not_Added");
          }

           
    
  }
}
if(isset($_GET['deletestud'])){

    $query="DELETE FROM users WHERE username='" .$_GET["deletestud"]."'";
    $query_run =mysqli_query($connection,$query);
     if ($query_run){
            
            header("Location:user_main.php?delete=Account_deleted");
           
       }
       else{
               header("Location:user_main.php?delete=Account_not_deleted");
       }

}

if(isset($_POST['update_account'])){


    
    $regex1 = "/^[0][9]\d{9}$/"; //CONTACT NUMBER
    $regex0= "/^[1-9][0-9][-]\d{5}$/"; //27-12343
    $regexname="/([A-ZÀ-ÿ][-,a-z. ']+[ ]*)/";
    
    $lname =$_POST['Lname'];
    $fname =$_POST['Fname'];
    $cnum =$_POST['cnum'];
    $date =$_POST['date'];
    $email =$_POST['email'];
    $uname =$_POST['username'];
    $pass =$_POST['password'];
    $rol =$_POST['sele'];
    
    
    
    
    if(!preg_match($regex1,$cnum)){
      header('Location:u_view.php?error=InvalidFormat');
     }
    
    
         else{
    
          
             $query= "UPDATE  users SET Lname='$lname', Fname='$fname', Cnum='$cnum', Bday='$date', email='$email', pass='$pass' , role='$rol' WHERE username = '$uname'";
             $query_run =mysqli_query($connection,$query);
    
             if($query_run)
             {
              header("Location:u_view.php?view=$uname&?success=Successfully_Updated");
    
             }
             else
             {
              header("Location:u_view.php?error=Update_error?view=$uname");
             }
    
              
            }
     }

              
            if(isset($_POST['avatarupt'])){
                         
                           
                           $ss=$_POST['users1'];
                           $tmp_file = $_FILES['fileToUpload']['tmp_name'];
                           $avatars=pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
                
                           $rand = md5(uniqid().rand());
                           $post_image = $rand.".".$avatars;
                        
                           
                           
                           $query= "UPDATE users SET avatar='$post_image' WHERE username =  '$ss'";
                           $query_run =mysqli_query($connection,$query);

                               if (move_uploaded_file($tmp_file,"Avatar/".$post_image))  {
                                header("Location:register.php?success=Avatar_Updated");
                               }else{
                                header("Location:register.php?error=FailedtoUpdate");
                             
                           }
                          
                        
                          
                        
                       }else{
                         
                       }
                   
             
                       if(isset($_POST['avatarupt1'])){
                         
                           
                        $ss=$_POST['users1'];
                        $tmp_file = $_FILES['fileToUpload']['tmp_name'];
                        $avatars=pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
             
                        $rand = md5(uniqid().rand());
                        $post_image = $rand.".".$avatars;
                     
                        
                        
                        $query= "UPDATE users SET avatar='$post_image' WHERE username =  '$ss'";
                        $query_run =mysqli_query($connection,$query);

                            if (move_uploaded_file($tmp_file,"Avatar/".$post_image))  {
                             header("Location:u_view.php?view=$ss&?success=Avatar_Updated");
                            }else{
                             header("Location:u_view.php?view=$ss&?error=FailedtoUpdate");
                          
                        }
                       
                     
                       
                     
                    }else{
                      
                    }
                  

                    if(isset($_GET['unarchive'])){
                        $id=$_GET['unarchive'];
                    
                    $sql = " UPDATE filemanage set Status= 'Display' where id='$id'";
                    $result = $connection->query($sql);
                    if($result){
                        header('Location:archive.php?unarchive=docu');
                    }
                    }
        



            if(isset($_GET['archive'])){
                $id=$_GET['archive'];
            
            $sql = " UPDATE filemanage set Status= 'archive' where id='$id'";
            $result = $connection->query($sql);
            if($result){
                header('Location:all.php?archive=docu');
            }
            }


            if (isset($_GET['dl'])) {
                $id = $_GET['dl'];
            
            
                $sql1 = "SELECT * FROM filemanage WHERE id='$id'";
                $result = mysqli_query($connection, $sql1);
            
                $file = mysqli_fetch_assoc($result);
                $filepath = 'lfupload/' . $file['file'];
            
                if (file_exists($filepath)) {

                    
                    header('Content-Description: File Transfer');
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate');
                    header('Pragma: public');
                    header('Content-Length: ' . filesize('lfupload/' . $file['file']));
                    flush(); 
                    readfile('lfupload/' . $file['file']);
            
              
                    exit;
                }
            
            }


            if (isset($_GET['delete'])) {
                $id = $_GET['delete'];


                $sql1 = "SELECT * FROM filemanage WHERE id='$id'";
                $result = mysqli_query($connection, $sql1);
            
                $file = mysqli_fetch_assoc($result);
                $filepath = $file['file'];
                unlink('lfupload/' .  $filepath);


                $query = "DELETE  FROM filemanage WHERE id ='$id' ";  
                $query_run = mysqli_query($connection,$query);  
if($query_run){
    header('Location:all.php?delete=docu');
}
            
                    
             
           }  
           ?>  
          


