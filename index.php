<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>DICT LC3 | Admin and Finance Division Documents Monitoring</title>
     <link rel="icon" href="assets/DICTLOGO.png">
     
  </head>
 
  <body>
      
  <?php
	          	$fullUrl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	      if(strpos($fullUrl,"?error=WrongPassword")==true){
		  ?>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>swal({
  title: "Error",
  text: "The password you entered is incorrect. Please try again.",
  icon: "error",
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
  
  
  
  <br><br><br><br><br><br><br><br>
  <div class="container px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto" >
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
               
                
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="assets/back.png" class="image"> </div>
                
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                  
                    <div class="row px-3 mb-4">
                 
                    <div class="row px-3"> 
                    <form action="users/admin/code.php" method="POST">
                    
                    <div class="form-floating">
                    <input style="color:black; font-size:20px;" class="form-control form-control-user mb-4" type="text" name="username"  id="username" placeholder="username"  required> 
  <label for="floatingInput"><i class="fa fa-user-circle" style="color:#002742"></i> <b>Username </b> <br><br> </label>

                         </div>
                         <div class="form-floating">
                                            <input type="password" name = "password" id="password" class="form-control form-control-user" placeholder="password" required>
                                            <span style="float:right;
    position: absolute;
    right: 1px;
    transform:translate(0,-50%);
    top:50%;
"> <button class="btn btn-warning " type="button" style="height:57px">  <i class="bi bi-eye-slash mx-2 " id="togglePassword"></i></button></span>
                                            <label for="floatingPassword"><b><i class="fa fa-lock"  style="color:#002742"></i> Password  </b><br><br> </label>
                                        </div>
                                            </div>
                                           <b style="font-size:12px; font-family: Helvetica; color:gray"> * Password is case sensitive</b>
                       
                    
                                        <div class="row mb-3 px-4 mt-4 "> <button type="submit" id="submits" name="submits" class="btn btn-blue text-center">Login</button>    </div> <small class="ml-4 ml-sm-5 mb-2">Dont have an account? <a href="#">Register</a> </small>
                 </div>
</form>
                   
                  
                
               
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2022. All rights reserved.</small>
            </div>
        </div>
    </div>
</div>
          

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





 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
  
</html>