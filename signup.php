<?php
include_once("config.php");

if(isset($_POST['signup']))
 {	
	$name = mysqli_real_escape_string($mysqli, $_POST['username']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
		
	// checking empty fields
    //$em=$_POST['email'];
    //$check="SELECT * from users where email=$em";
    //$result=mysqli_query($mysqli,$check);

	if(!(empty($name) || empty($email) || empty($password)) /*&& mysqli_num_rows($result)===0*/) 
    { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')");
	    echo"<script>alert('Signup Successfully!')</script>";
	}
    else
    {
        echo"<script>alert('Data Already exist!')</script>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>SignUp Page</title>
    
</head>
<body>

    <div id="content">
    <p id="heading">Sign Up</p>
        <div id="login" >
      
          <form action="" method="post">
        <div id="input_box">
        <div class="inputs">
             <p style="font-weight:bold">UserName:</p> 
             <input id="username" class="username" type="text" name="username"  required>
             
</div>


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


         <br><br>
         <p>If you Successfully Signup then  <a  class="link" href="login.php">Login! </a></p>

         <div class="button_div">
          <button type="submit" name="signup" value="signup "id="submit" class="button"> SignUp</button>
        </div>
            </form>

          </div>

          
        
    </div>
    <script src="script.js"></script>




</body>
</html>