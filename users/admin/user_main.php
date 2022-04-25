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
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
 <?php
	          	$fullUrl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	      if(strpos($fullUrl,"?Status=Active")==true){
		  ?>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
<script>
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 4000,
  timerProgressBar: true,

})

Toast.fire({
  icon: 'success',
  title: 'User status is now set to active.'
})
</script>
      <?php
			
        }
        else if(strpos($fullUrl,"?Status=NotActive")==true){ ?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
<script>
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 4000,
  timerProgressBar: true,
 
})

Toast.fire({
  icon: 'error',
  title: 'User status is now set to inactive.'
})
</script>
         
       <?php
			
        }
        else if(strpos($fullUrl,"?error=Update_error")==true){ ?>
          <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>Swal.fire({
  title: "Error!",
  text: "Cannot Update! Please Try Again! ",
  icon: "error",
 confirmButtonColor: "#002742",
  confirmButtonText: "Ok",
});</script>
        <?php
          }
          else if(strpos($fullUrl,"?error=InvalidFormat")==true){ ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>Swal.fire({
    title: "Ooppss!",
    text: "Invalid Phone Number!",
    icon: "error",
   confirmButtonColor: "#002742",
  confirmButtonText: "Ok",
  });</script>
          <?php
            }
        else if(strpos($fullUrl,"?error=Username_Already_Taken")==true){ ?>
              <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>Swal.fire({
      title: "Ooppss!",
      text: "Username already exist!",
      icon: "error",
     confirmButtonColor: "#002742",
  confirmButtonText: "Ok",
    });</script>
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
                                                          text: "Account was Successfully Registered",
                                                        })
                           </script>

              <?php
                  }
                  else if(strpos($fullUrl,"?delete=Account_deleted")==true){ ?>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>const Toast = Swal.mixin({toast: false,
                                                            showConfirmButton: false,
                                                            timer: 3000,
                                                          })

                                              Toast.fire({color:'#8abb6f',
                                                          icon: 'success',
                                                          title: 'Deleted!',
                                                          text: "Account was Successfully Deleted",
                                                        })
                           </script>
    
                  <?php
                      }
		else{
			
		}
  ?>
<div class="container-fluid">
    <div class ="card-shadow-mb-4">
    <div class ="card-header-py-3">
        <h3 class ="m-0 font-weight-bold "style="color: #5a5c69;"><button type="button" class="btn btn-dark" title="Back" onclick="history.back()"><i class="fa fa-arrow-left" aria-hidden="true"></i> </button> | <i class="fa fa-users" aria-hidden="true"  style="color:#4e73df"></i> Accounts</h3>
     
<div class="card-body">
<button type="button" class="btn btn-success my-3" data-toggle="modal" data-target="#add"><i class="fa fa-plus" aria-hidden="true"></i> Add New Account</button>

<div class ="table-responsive">

<?php

$query = "SELECT * FROM users ORDER BY Fname DESC";
$query_run = mysqli_query($connection, $query);

?>
<table  id="DataTableMli" class = "table table-boardered text-dark" width="100%" cellspacing="0">
 <thead>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Birthdate</th>
        <th>ContactNumber</th>
        <th>E-mail</th>
        <th>Username</th>
        <th>Role</th>
        <th>Avatar</th>
        <th>Status</th>
        <th>Actions</th>
       
    </tr>
 </thead>
 <tbody>

 <?php
 if(mysqli_num_rows($query_run) > 0)

 {
  while ($row = mysqli_fetch_assoc($query_run))
   {
   
    ?>

    <tr>
        <td> <?php echo $row['Fname'];?> </td>
        <td> <?php echo $row['Lname']; ?> </td>
        <td> <?php echo $row['Bday'];?> </td>
        <td> <?php echo $row['Cnum'];?> </td>
        <td> <?php echo $row['email'];?> </td>
        <td> <?php echo $row['username'];?> </td>
        <td> <?php echo $row['role'];?> </td>
        <td><?php echo '<img src="Avatar/'.$row['avatar'].'" width="100px;" height="100px"; alt="Image">' ?></td>
        <td> <?php if($row['Status'] == 'Active'){?>
          <form method="post" action="code.php?chk=<?php echo $row['username'];?>">
        <button title="View" id="check" name="check" class="btn btn-success btn-sm"><?php echo $row['Status']; ?></i></button>
        </form>

        <?php
        }
      else {?>
       <form method="post" action="code.php?chk1=<?php echo $row['username'];?>">
         <button title="View" id="check" name="check"class="btn btn-danger btn-sm"><?php echo $row['Status']; ?></i></button>
         </form>
     <?php
        
      }?>

      
      
      </td>

       
        <td>
                                      
                                        <a href="u_view.php?view=<?php echo $row['username'];?>" >
                                        <button title="View" class="btn btn-info btn-sm"> <i class="fa fa-eye" aria-hidden="true"></i></button>
                 </a>
                                         <a href="u_delete.php?delete=<?php echo $row['username'];?>" >
                                         <button title="Delete" class="btn btn-danger btn-sm remove" ><i class="fa fa-trash" aria-hidden="true"></i></button>   
                 </a>
                                       
                               
                                        </td>
       
    </tr>

    
     <?php
  }


 } 
 else{
  echo "NO RECORD FOUND";
 }
 ?>
 </tbody>
</table>

</div>
</div>
</div>
</div>


<!-- Modal Add-->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
  <div class="modal-dialog " role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px; color: #5a5c69; font-weight:bold"> <i style="font-size:30px; color: #4e73df" class="fa fa-user-plus"></i>ADD USERS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="code.php" method="POST" enctype="multipart/form-data">
    <div class="modal-body " style="color:black">

                    
                     
                     <div class=form-group>
                          <label>Firstname</label>
                          <input type="text" name="fname" class="form-control" placeholder="Enter Firstname" style="color:black" required>
                     </div>
                     
                     <div class=form-group>
                          <label>Lastname</label>
                          <input type="text" name="lname" class="form-control" placeholder="Enter Lastname"style="color:black" required>
                     </div>

                     <div class=form-group>
                          <label>Contact Number</label>
                          <input type="number" name="cnum" class="form-control" placeholder="Enter Contact Number"style="color:black" required>
                     </div>
                     
                     <div class=form-group>
                          <label>Email</label>
                          <input type="email" name="email" class="form-control" placeholder="Enter Email"style="color:black" required>
                     </div>

                     <div class=form-group>
                     <label>Birthday</label>
                    <input class="form-control" id="datepicker" name="date" placeholder="MM/DD/YYY" type="text"/>
                    </div>                
                    <script>
                        $('#datepicker').datepicker({
                            uiLibrary: 'bootstrap4'
                        });
                    </script> 
                                 
                  
                     
                     <div class=form-group>
                          <label>Role</label><br>
                          <select class="form-control form-select-lg mb-12" name="ustype" aria-label=".form-select-lg example" style="color:black">
                             <option  name="ustype" value="Admin">Admin</option>
                             <option  name="ustype"  value="Finance">Finance</option>
                             <option  name="ustype"  value="Staff">Staff</option>
                          </select>
                     </div>

                     <div class=form-group>
                     <label for="pwd">Avatar</label>
                          <input type="file" name="user_images" id="user_images" value="" class="form-control" style="color:black" accept="image/png, image/gif, image/jpeg" required>
                     </div>

                     <div class=form-group>
                          <label>Username</label>
                          <input type="text" name="username" class="form-control" placeholder="Enter Username"style="color:black" required>
                     </div>

                     <div class=form-group>
                          <label>Password</label>
                          <input type="text" name="pass" class="form-control" placeholder="Enter Password"style="color:black" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="submit" name="Insert" class="btn btn-success">Submit</button>
      
      </div>
      </form>
    </div>
  </div>
</div>






</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
