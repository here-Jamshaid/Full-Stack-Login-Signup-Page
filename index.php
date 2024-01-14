<?php
include_once("config.php");
session_start();

$loginshow = $error="";  //define error variable



if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    // Retrieve form data
    $email = $_POST['email'];
    $Password = $_POST['password'];
    
    $sql="SELECT * from users where email='$email' AND password='$Password'";
    $res = mysqli_query($mysqli,$sql); 
    
    // Check if entered credentials match the static values
    if (mysqli_num_rows($res)===1)
    {
        $fetch_row=mysqli_fetch_assoc($res);
        // Set cookies with student ID and hashed password
        if($fetch_row['email']===$email && $fetch_row['password']===$Password)
        {
        setcookie('email', $email, time() + (86400 * 30), '/'); // Cookie set to expire in 30 days
        setcookie('password', md5($Password), time() + (86400 * 30), '/');

         $loginshow= "Login Successful!";
         $_SESSION["name"]=$fetch_row['name'];
         
        }
        else
        {
            $error= "Invalid email or password";
        }
    } else
    {
        $error= "Invalid email or password";
    }

    header("Location:login.php? param1={$loginshow}& param2={$error}");
}




?>