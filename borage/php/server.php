<?php  
session_start(); 
   
$username = ""; 
$email    = ""; 
$errors = array();  
$_SESSION['success'] = ""; 
   
$db = mysqli_connect('localhost', 'root', '', 'online_store'); 
   
if (isset($_POST['reg_user'])) { 
   
    $username = mysqli_real_escape_string($db, $_POST['username']); 
    $email = mysqli_real_escape_string($db, $_POST['email']); 
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']); 
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']); 

    if (empty($username)) { array_push($errors, "Username is required"); } 
    if (empty($email)) { array_push($errors, "Email is required"); } 
    if (empty($password_1)) { array_push($errors, "Password is required"); } 
   
    
    if ($password_1 != $password_2) { 
        array_push($errors, "The two passwords do not match"); 
    } 

     $sql_u = "SELECT * FROM users WHERE username='$username'";
      $sql_e = "SELECT * FROM users WHERE email='$email'";
 	$res_u = mysqli_query($db, $sql_u);
  	$res_e = mysqli_query($db, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	  array_push($errors, "Sorry... username already taken");  	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  array_push($errors, "Sorry... email already taken"); 
	}	
    if (count($errors) == 0) {
    $password = md5($password_1); 
	
        $query = "INSERT INTO users (username, email, password)  
                  VALUES('$username', '$email', '$password')";  
          
        mysqli_query($db, $query); 
        $_SESSION['username'] = $username; 
        $_SESSION['success'] = "You have logged in"; 
        header('location: logout.php');  
    } 
} 
   
if (isset($_POST['login_user'])) { 
          $username = mysqli_real_escape_string($db, $_POST['username']); 
    $password = mysqli_real_escape_string($db, $_POST['password']); 
   
    if (empty($username)) { 
        array_push($errors, "username is required"); 
    } 
    if (empty($password)) { 
        array_push($errors, "Password is required"); 
    } 
    if (count($errors) == 0) { 
          
        $password = md5($password); 
          
        $query = "SELECT * FROM users WHERE email= 
                '$email' AND password='$password'"; 
        $results = mysqli_query($db, $query); 
   
        if (mysqli_num_rows($results) == 1) { 
            $_SESSION['username'] = $username; 
            $_SESSION['success'] = "You have logged in!"; 
            header('location: logout.php'); 
        } 
        else { 
            array_push($errors, "username or password incorrect");  
        } 
    } 
} 
   
?> 