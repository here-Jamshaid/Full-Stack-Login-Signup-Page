<?php
   $loginshow = $error="";
   session_start();
   if(isset($_GET["param1"]))
   {
    $loginshow=$_GET["param1"];
    $error=$_GET["param2"];
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
    
</head>
<body>

    <div id="content">
    <p id="heading">Login</p>
        <div id="login" >
            
            
            <form action="index.php" method="post">

            <div id="input_box">
            <div id="email_content" class="inputs">            
                <p style="font-weight:bold">Email:</p> 
             <input id="email" class="username" type="email" name="email"  required>
            </div>



            <div class="inputs"> 
                 <p style="font-weight:bold">Password:</p> 

                <div id="container_password" class="inputs">
                    <input type="password" id="password" name="password" >
                    <i class="togglePassword fas fa-eye" id="eye" onclick="visibility()"></i> 
                </div>
            </div> 
            </div>


            <span ><?php /*$loginshow;*/
               if(isset($_SESSION["name"]))
               {
                header("Location:after_login.php");
                //echo $_SESSION["name"];
               }
                ?></span>
            <span style="color: red;"><?php echo $error; ?></span>

            <br><br>
            

            <p>If you are new on this then <a class="link" href="signup.php">SignUp! </a></p>

            <div class="button_div">
             <button type="submit" name="login" value="login "id="submit" class="button"> LOGIN</button>
             </div>
            </form>

        </div>


    </div>
    <script src="script.js"></script>




</body>
</html>
