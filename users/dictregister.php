<!doctype html>
<html lang="en">
          <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="../css/register.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

            <!-- Title/Logo -->
            <title>DICT LC3 | Registration Form</title>
            <link rel="icon" href="../assets/DICTLOGO.png">
            <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
          </head>
 
  <body>
  <div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>
    <!-- Include Date Range Picker -->
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
          <script>
              $(document).ready(function(){
                  var date_input=$('input[name="date"]'); //our date input has the name "date"
                  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                  date_input.datepicker({
                      format: 'mm/dd/yyyy',
                      container: container,
                      todayHighlight: true,
                      autoclose: true,
                  })
              })
          </script>


    <!-- Include Sweetalert -->
         <?php
                 $fullUrl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
             if(strpos($fullUrl,"?error=InvalidFormat")==true){ ?>

                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
                    <script> Swal.fire({title: "Invalid!",
                                        text: "Invalid Phone Number",
                                        icon: "error",
                                        confirmButtonColor: "#002742",
                                        confirmButtonText: "Ok",
                                      });
                       </script>
    
                    <?php
                        }
               else if(strpos($fullUrl,"?success=Successfully_Registered")==true){ ?>
                          <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
                          <script>const Toast = Swal.mixin({toast: false,
                                                            showConfirmButton: false,
                                                            timer: 3000,
                                                          })

                                              Toast.fire({color:'#8abb6f',
                                                          icon: 'success',
                                                          title: 'Success!',
                                                          text: "Your Account was Successfully Registered",
                                                        })
                           </script>
        
                        <?php
                            }
        
                 else if(strpos($fullUrl,"?error=User_Not_Added")==true){ ?>
                            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
                            <script> Swal.fire({title: "Oopss!",
                                                text: "Username already Exist! Please try again",
                                                icon: "error",
                                                confirmButtonColor: "#002742",
                                                confirmButtonText: "Ok",
                                               });
                             </script>
                             <?php
            }
                else if(strpos($fullUrl,"?error=Username_Already_Taken")==true){ ?>
                           <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
                           <script> Swal.fire({title: "Oopss!",
                                               text: "Username already exist!",
                                               icon: "error",
                                               confirmButtonColor: "#002742",
                                               confirmButtonText: "Ok",
                                               });
                           </script>
                          <?php
                            } 
              else{
                
              }
         ?>
  
  
  
  
    <div class="container-lg d-flex justify-content-center " style="margin-top:80px">
       <div class="col-lg-9" >
           <div class="card2 card border-0 px-5 py-5">  <a href="../index.php"><span style="float:left; ">                                                 
                                                <button class="btn btn-dark " type="button" style="height:57px; width:50px">  <i class="fa fa-arrow-left" aria-hidden="true"></i></button></span></a>
                <h2 class="fw-bolder text-dark">Sign Up</h2>  <p class="text-muted fw-bold fs-4" style="color: #a1a5b7!important;"> Enter your details to create your account</p> 
                    <div class="row ">
                        <div class="row px-3"> 

                          <!-- Registration Form-->

                             <form action="loginf.php" method="POST">
                                  <div class="row"> 
                                      <div class="col-lg-6">

                                        <div class="form-floating">
                                           <input style="color:black; font-size:20px;" class="form-control form-control-user mb-4" type="text" name="Fname"  id="Fname" placeholder="Firstname"  required> 
                                           <label for="floatingInput"><i class="fa fa-id-badge" aria-hidden="true" style="color:#002742"></i> <b>Firstname </b> <br><br> </label>
                                        </div>

                                      </div>  

                                      <div class="col-lg-6">

                                         <div class="form-floating">
                                            <input style="color:black; font-size:20px;" class="form-control form-control-user mb-4" type="text" name="Lname"  id="Lname" placeholder="Lastname"  required> 
                                            <label for="floatingInput"><i class="fa fa-id-badge" aria-hidden="true" style="color:#002742"></i> <b>Lastname </b> <br><br> </label>
                                         </div>                      
                                  </div>

                       </div>

                                  <div class="row"> 
                                         <div class="col-lg-8">

                                            <div class="form-floating">
                                                <input style="color:black; font-size:20px;" class="form-control form-control-user mb-4" type="number" name="cnum"  id="cnum" placeholder="ContactNumber"  required> 
                                                <label for="floatingInput"><i class="fa fa-phone" style="color:#002742"></i> <b>Mobile Number</b> <br><br> </label>
                                            </div>

                                         </div>
  
                                          <div class="col-lg-4">
                                          
                                            <div class="form-floating">
                                                <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                                                <label for="floatingInput"><i class="fa fa-calendar" style="color:#002742"></i> <b>Birthday</b> <br><br> </label><br>
                                            </div>

                                          </div>
                                    </div>

                                            <div class="form-floating">
                                                <input style="color:black; font-size:20px;" class="form-control form-control-user mb-4" type="email" name="email"  id="email" placeholder="E-mail"  required> 
                                                <label for="floatingInput"><i class="fa fa-envelope-o" style="color:#002742"></i> <b>Email </b> <br><br> </label>
                                            </div>

                                            <div class="form-floating">
                                                <input style="color:black; font-size:20px;" class="form-control form-control-user mb-4" type="text" name="username"  id="username" placeholder="username"  required> 
                                                <label for="floatingInput"><i class="fa fa-user-circle" style="color:#002742"></i> <b>Username </b> <br><br> </label>
                                            </div>

                                            <div class="form-floating">
                                                 <input type="password" name = "password1" id="password" onChange="onChange()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control form-control-user" placeholder="password" required>
                                                 <span style="float:right; position: absolute; right: 1px; transform:translate(0,-50%); top:50%;">                                                 
                                                 <button class="btn btn-warning " type="button" style="height:57px">  <i class="bi bi-eye-slash mx-2 " id="togglePassword"></i></button></span>
                                                 <label for="floatingPassword"><b><i class="fa fa-lock"  style="color:#002742"></i> Password  </b><br><br> </label>
                                             </div>
                                             <br>
                                             
                                            <div class="form-floating">
                                                 <input type="password" name = "confirm" id="confirm" class="form-control form-control-user" onChange="onChange()"  placeholder="password"  required>
                                                 <span style="float:right; position: absolute; right: 1px; transform:translate(0,-50%); top:50%;">
                                                 <button class="btn btn-warning " type="button" style="height:57px">  <i class="bi bi-eye-slash mx-2 " id="togglePassword1"></i></button></span>
                                                 <label for="floatingPassword"><b><i class="fa fa-lock"  style="color:#002742"></i> Confirm Password  </b><br><br> </label>
                                            </div>

                                   </div>
                                            
                                            <div class="form-group px-3"><br> 
                                                 <input class="form-check-input" type="checkbox" value="I agree statements in " id="flexCheckDefault"  required> <label style="padding:3px">I agree statements in </label><a href="Terms and Conditions.html"  target="_blank">Terms and Condition</a> 
                                            </div>

                                            <div class="row mb-3 px-4 mt-4 "> 
                                              <button type="submit" id="register" name="register" class="btn btn-blue text-center">Submit</button>   
                                            </div>

                             <!-- End of Registration Form-->
                             
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


            const togglePassword1 = document.querySelector("#togglePassword1");
            const password1 = document.querySelector("#confirm");

            togglePassword1.addEventListener("click", function () {
                // toggle the type attribute1
                const type = password1.getAttribute("type") === "password" ? "text" : "password";
                password1.setAttribute("type", type);
                
                // toggle the icon1
                this.classList.toggle("bi-eye");
            });

            function onChange() {
              const password = document.querySelector('input[name=password]');
              const confirm = document.querySelector('input[name=confirm]');
              if (confirm.value === password.value) {
                confirm.setCustomValidity('');
              } else {
                confirm.setCustomValidity('Passwords do not match');
              }
}
        </script>





 

    <!-- Optional JavaScript; choose one of the two! -->
 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<script src="../css/main.js"></script>
  </body>
  
</html>