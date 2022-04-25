<?php

include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark"> EDIT Admin Profile </h6>
        </div>
        <div class="card-body">
        <?php


            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM register WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>
                        <form action="code.php" method="POST">
                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label class = "text-dark"> Username </label>
                                <input type="text" name="edit_username" value="<?php echo $row['username'] ?>"
                                 class="form-control" placeholder="Enter Username" required minlength="4" maxlength="16" readonly >
                            </div>
                            <div class="form-group">
                                <label class = "text-dark"> Fullname </label>
                                <input type="text" name="edit_fullname" value="<?php echo $row['fullname'] ?>" class="form-control"
                                    placeholder="Enter Fullname" readonly>
                            </div>
                            <div class="form-group">
                                <label class = "text-dark">Email</label>
                                <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control"
                                    placeholder="Enter Email" readonly>
                            </div>
                            <label class = "text-dark">Current Password</label>
                            <div class="input-group">  
                                    <input type="password" name="cu_password" id="myInput4"
                                    class="form-control" placeholder="Enter Password" required>
                                    <button class="btn btn-outline-primary" type="button" onclick="myFunction4()"><i class="far fa-eye"></i></button>
                            </div>
                            <label class ="mt-2 py-1 text-dark">New Password</label>
                            <div class="input-group">
                                <input type="password"  id="myInput5" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                           title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" name="edit_password" 
                               class="form-control" placeholder="Enter Password">
                               <button class="btn btn-outline-primary" type="button" onclick="myFunction5()"><i class="far fa-eye"></i></button>
                            </div>

                            <div class="form-group">
                            <label class ="mt-2 py-1 text-dark">Usertype</label>
                                <select name="update_usertype" class="form-control"  >
                                <option value = "admin"> Admin</option>
                                </select>
                            </div>

                            <a href="register.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                            </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>


