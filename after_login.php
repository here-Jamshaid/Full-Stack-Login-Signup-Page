<?php
   session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Susscesfully</title>
    <style>
        body
{
    background: linear-gradient(45deg,#262626,#3a4452);
    height:97.8vh;
    display:flex;
    justify-content:center;
    align-items:center;
}
.content
{
    width:800px;
    height:600px;

}
.print
{
     display:flex;
    justify-content:center;
    align-items:bottom; 

}
.l_out 
{
   
    position:absolute;
    top:42%;
    left:37%;

}
        </style>
</head>
<body>
   
    <div class="content">
    <div class="print">
        <p style="
    color:white;
    font-size: 100px;
    font-weight: bold;
    
">Hi!
        <?php 
           if(isset($_SESSION["name"]))
           {
            echo $_SESSION['name'];
           }
        ?>
        </p>
    </div>

    <div class="l_out">
    <a href="login.php" id="logout" style="
    
    padding: 10px 150px;
    background: white;
    color:linear-gradient(45deg,#262626,#3a4452);
    font-weight: bold;
    border:1px solid #262626;
    border-radius:20px;
    text-decoration:none;s
    " <?php
$cookie_name = 'password';
$cookie_name1 = 'email';
$cookie_session = 'PHPSESSID';

// empty value and expiration one hour before
 setcookie($cookie_name,'', time() - 3600,'/');
 setcookie($cookie_name1,'', time() - 3600,'/');
 setcookie($cookie_session,'', time() - 3600,'/');
?>> LOGOUT </a>
    </div>
    </div>




    
</body>
</html>