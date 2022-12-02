<?php include('../php/server.php') ?> 
<!DOCTYPE html> 
<html> 
<head> 
    <title> 
        Login | Borage
    </title> 
      
    <link rel="stylesheet" type="text/css"
            href="../css/loginstyle.css"> 

</head> 
<body> 
    <div class="header"> 
        <h2>Login</h2> 
    </div> 
       
    <form method="post" action="../php/login.php"> 
   
        <?php include('../php/errors.php'); ?> 
   
        <div class="input-group"> 
            <label>Enter Username</label> 
            <input type="text" name="username" > 
        </div> 
        <div class="input-group"> 
            <label>Enter Password</label> 
            <input type="password" name="password"> 
        </div> 
        <div class="input-group"> 
            <button type="submit" class="btn"
                        name="login_user"> 
                Login 
            </button> 
        </div> 
        <p> 
            New Here?  
            <a href="../php/register.php"> 
                Sign Up 
            </a> 
        </p> 
    </form> 

</body> 
</html>
