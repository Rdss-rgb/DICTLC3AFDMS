<?php

include('security.php');

if(isset($_POST['login_btn']))
{
    $email_login = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['emaill'])); 
    $password_login = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['passwordd'])); 

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login'";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
    }
    else
    {
        $_SESSION['status'] = "Email/Password is Invalid";
        header('Location: login.php');  
    }
}
?>