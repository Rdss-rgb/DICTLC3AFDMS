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


<style>
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 50%;
    border-radius: 5px 5px;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -22%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}


</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="../css/register.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
            <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
            <?php
	          	$fullUrl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	      if(strpos($fullUrl,"?success=Avatar_Updated")==true){
		  ?>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>swal({
  title: "Success!",
  text: "Your profile image was updated.",
  icon: "success",
  button: "Ok",
});</script>
      <?php
			
        }
        else if(strpos($fullUrl,"?success=Successfully_Updated")==true){ ?>
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>swal({
  title: "Update Personal Info!",
  text: "Successfully updated your personal information",
  icon: "success",
  button: "Ok",
});</script>
       <?php
			
        }
        else if(strpos($fullUrl,"?error=Update_error")==true){ ?>
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>swal({
  title: "Error!",
  text: "Cannot Update! Please Try Again! ",
  icon: "error",
  button: "Ok",
});</script>
        <?php
          }
          else if(strpos($fullUrl,"?error=InvalidFormat")==true){ ?>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>swal({
    title: "Error!",
    text: "Invalid Phone Number!",
    icon: "error",
    button: "Ok",
  });</script>
  <?php
          }
    else if(strpos($fullUrl,"?error=FailedtoUpdate")==true){ ?>
              <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>swal({
     title: "Error!",
  text: "Failed to update your avatar. Please Try Again!",
  icon: "error",
  button: "Ok",
    });</script>
          <?php
            }
		else{
			
		}
  ?>
 
<div class="container emp-profile">
          
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-img">
                       
<?php 
                        
                 if(isset($_GET['view'])){
                               
                        $view=$_GET['view'];
                        $query="SELECT * FROM users WHERE username='$view'";
                        $query_run=mysqli_query($connection,$query);
       
                         foreach($query_run as $row)  
                          {

                          }
                          
                          }?>

                        <?php echo '<img src="Avatar/'.$row['avatar'].'" width="50px;" height="50px"; alt="Image">' ?>
                        <a href="u_updateavt.php?update_avatar=<?php echo $row['username'];?>" >  <div class="file btn btn-lg btn-primary" >
                                Change Photo

                               
                            </div>
                            </a>
                        </div>
                    </div>
                 
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                      <?php 
                                      echo $row['Fname'].' '. $row['Lname'];
                                      
                                      ?>  
                                    </h5>
                                    <h6>
                                    <?php echo $row['role']?>
                                    </h6>
                                    <p class="proile-rating"><span>Department of Information and Communication Technology</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General Account Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        
                       <center> <input type="button" class="profile-edit-btn" name="btnAddMore" data-toggle="modal" data-target="#add" value="Edit Profile"/>
</center> </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                   
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php 
                                      echo $row['Fname'].' '. $row['Lname'];
                                      
                                      ?>  </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php 
                                      echo $row['email'];
                                      
                                      ?>  </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Contact Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php 
                                      echo $row['Cnum'];
                                      
                                      ?>  </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Birthday</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php 
                                      echo $row['Bday'];
                                      
                                      ?>  </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $row['username']?></p>
                                            </div>
                                        </div>
                                       
                            </div>
                         
   
 

                          <!-- Modal Add-->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
  <div class="modal-dialog  " role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px; color: #5a5c69; font-weight:bold"> <i style="font-size:30px; color: #4e73df" class="fa fa-cogs"></i> Account Settings</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php 
                        
                        $query="SELECT * FROM users WHERE username='$view'";
       $query_run=mysqli_query($connection,$query);
       
      foreach($query_run as $row)
      {

      
  
     
  }?>
      <form action="code.php" method="POST" enctype="multipart/form-data">
    <div class="modal-body">

                            <div class="row"> 
                                      <div class="col-lg-6">

                                        <div class="form-floating">
                                           <input style="color:black; font-size:18px;" class="form-control form-control-user mb-4" type="text" name="Fname"  id="Fname" value="<?php echo $row['Fname'] ?>" placeholder="Firstname"  required> 
                                           <label for="floatingInput"><i class="fa fa-id-badge" aria-hidden="true" style="color:blue"></i> Firstname  <br><br> </label>
                                        </div>

                                      </div>  

                                      <div class="col-lg-6">

                                         <div class="form-floating">
                                            <input style="color:black; font-size:18px;" class="form-control form-control-user mb-4" value="<?php echo $row['Lname'] ?>" type="text" name="Lname"  id="Lname" placeholder="Lastname"  required> 
                                            <label for="floatingInput"><i class="fa fa-id-badge" aria-hidden="true"  style="color:blue"></i> Lastname  <br><br> </label>
                                         </div>                      
                                  </div>

                       </div>

                                  <div class="row"> 
                                         <div class="col-lg-8">

                                            <div class="form-floating">
                                                <input style="color:black; font-size:18px;" class="form-control form-control-user mb-4" type="number" name="cnum" value="<?php echo $row['Cnum'] ?>"  id="cnum" placeholder="ContactNumber"  required> 
                                                <label for="floatingInput"><i class="fa fa-phone"  style="color:blue"></i> Mobile Number <br><br> </label>
                                            </div>

                                         </div>
  
                                          <div class="col-lg-4">
                                          
                                            <div class="form-floating">
                                                <input class="form-control" id="date" name="date" value="<?php echo $row['Bday'] ?>" placeholder="MM/DD/YYY" type="text"/>
                                                <label for="floatingInput"><i class="fa fa-calendar"  style="color:blue"></i> Birthday <br><br> </label><br>
                                            </div>

                                          </div>
                                    </div>

                                            <div class="form-floating">
                                                <input style="color:black; font-size:18px;" class="form-control form-control-user mb-4" value="<?php echo $row['email'] ?>" type="email" name="email"  id="email" placeholder="E-mail"  required> 
                                                <label for="floatingInput"><i class="fa fa-envelope-o"  style="color:blue"></i> Email  <br><br> </label>
                                            </div>

                                            <div class="form-group">
                                                <select id="sele" name="sele" class="form-select" aria-label="Default select example">
                                                <option value="Admin" <?php if($row['role']=="Admin"){ echo "selected";  }?>>Admin</option>
                                                <option value="Staff" <?php if($row['role']=="Staff"){ echo "selected";  }?>>Staff</option>
                                                <option value="Finance" <?php if($row['role']=="Finance"){ echo "selected";  }?>>Finance</option>
                                                </select>
                                                </div>

                                            <div class="form-floating">
                                                <input style="color:black; font-size:18px;" class="form-control form-control-user mb-4" value="<?php echo $row['username'] ?>" type="text" name="username"  id="username" placeholder="username" readonly> 
                                                <label for="floatingInput"><i class="fa fa-user-circle"  style="color:blue"></i> Username  <br><br> </label>
                                            </div>

                                            <div class="form-floating">
                                                 <input type="password" name = "password" id="password" onChange="onChange()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="<?php echo $row['pass'] ?>" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control form-control-user" placeholder="password" required>
                                                 <span style="float:right; position: absolute; right: 1px; transform:translate(0,-50%); top:50%;">                                                 
                                                 <button class="btn btn-primary " type="button" style="height:57px">  <i class="bi bi-eye-slash mx-2 " id="togglePassword"></i></button></span>
                                                 <label for="floatingPassword"><b><i class="fa fa-lock"  style="color:blue"></i> Password  </b><br><br> </label>
                                             </div>
                    
                                             </div>
    
      <div class="modal-footer">    
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="submit" name="update_account" class="btn btn-success">Update</button>
      
      </div>
      </form>
    </div>
  </div>
</div>
                                                         <!-- toggle password -->
        <script>
            const togglePassword = document.querySelector("#togglePassword");
            const password = document.querySelector("#password");

            togglePassword.addEventListener("click", function () {
                // toggle the type attribute
                const type = password.getAttribute("type") === "password" ? "text" : "password";
                password.setAttribute("type", type);
                
                // toggle the icon
                this.classList.toggle("bi-eye");
            });


        
        </script> 
       
      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  
     
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
