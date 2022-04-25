<?php

session_start();

include('includes/header.php');
?>
<body class="mask" style="background-color: #02084b">

<div class="container">
<a href="../index.php">
        <img class="img-fluid mx-auto d-block mt-2 py-2" src="img/logo.png" >
        </a>
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="img/lgn.jpg"
                                height ="490" width ="490" style =" background-position: center; background-size: cover;">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Administration Login Here! <i class="fas fa-user-cog fa-text-gray"></i></h1>
                                        <?php
                                        if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                                         {
                                                echo '<h2 class="lead bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                                                unset($_SESSION['status']);
                                         }
                                         if(isset($_SESSION['success']) && $_SESSION['success'] !='') 
                                         {
                                                echo '<h2 class="lead bg-success text-white"> '.$_SESSION['success'].' </h2>';
                                                unset($_SESSION['success']);
                                         }
                    ?>
                                    </div>

                                    <form class="user" action = "logincode.php" method = "POST">
                                        <div class="form-group">
                                            <small> <i class="fas fa-user-circle mr-2"></i> Email Address</small>
                                            <input type="email" name = "emaill" class="form-control form-control-user"
                                            placeholder="Enter Email Address...">
                                        </div>
                                        <small><i class="fas fa-key mr-2"></i> Password</small>

                                        <div class="input-group">
                                            <input type="password" name = "passwordd" id="myInput10" class="form-control form-control-user"
                                            placeholder="Password">
                                            <button class="btn btn-outline-primary" type="button" onclick="myFunction10()"><i class="far fa-eye"></i></button>
                                        </div>
                
                                        <div class="form-group">
                                        </div>
                                        <button type = "submit" name = "login_btn" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        <a class="row justify-content-center"  href="password-email.php">Forgot your Password?</a>
                                        <a class="row justify-content-center"  href="../index.php">Back to Homepage</a>
                                    </form>
                                  
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    </body>
<?php
include('includes/scripts.php');
?>
