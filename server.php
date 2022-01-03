<?php
session_start();


$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'vehicle')or die("Could not connect to database");

// user registration
if (isset($_POST['reg_user'])) 
{
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) 
  {
	array_push($errors, "The two passwords do not match");
  }

  // checking already taken email or username
  $user_check_query = "SELECT * FROM customers WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) 
  { // if user exists
    if ($user['username'] === $username) 
    {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) 
    {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) 
  {
  	$password = md5($password_1);

  	$query = "INSERT INTO customers (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}


// LOGIN USER
if (isset($_POST['login_user'])) 
{
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password_1']);

  if (empty($username)) 
  {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) 
  {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) 
  {
  	$password = md5($password);
  	$query = "SELECT * FROM customers WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) 
    {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		echo "      Wrong usename/password combination please check and re-enter properly";
  	}
  }
}
//taking table values and puting in db
if(isset($_POST['submitf1']))
{   
    $usern=$_SESSION['username'];
    
    $user_check_queryf = "SELECT * FROM mf1 WHERE username='$usern' LIMIT 1";
  $resultf = mysqli_query($db, $user_check_queryf);
  $userf = mysqli_fetch_assoc($resultf);
  
  if ($userf) 
  { 
    if ($userf['username'] === $usern) 
    {
      
       header('location: alreadyf.php');
    }  
  }
    
    if (! $userf) 
    {
    
    $en1=$_POST['a'];
    $en2=$_POST['b'];
    $en3=$_POST['c'];
    $en4=$_POST['d'];
    $en5=$_POST['e'];
 
   	$query = "INSERT INTO mf1 (username,en1,en2,en3,en4,en5) 
  			  VALUES('$usern', '$en1', '$en2','$en3','$en4','$en5')";
  	mysqli_query($db, $query);
    echo "THANKYOU FOR SUBMITTING FEEDBACK";
    header('location: thank.php');
    }
}
           

if(isset($_POST['submitf2']))
{   
    $usern=$_SESSION['username'];
    
    $user_check_queryf = "SELECT * FROM mf2 WHERE username='$usern' LIMIT 1";
  $resultf = mysqli_query($db, $user_check_queryf);
  $userf = mysqli_fetch_assoc($resultf);
  
  if ($userf) 
  { 
    if ($userf['username'] === $usern) 
    {
      
       header('location: alreadyf.php');
    }  
  }
    
    if (! $userf) 
    {
    
    $en1=$_POST['a'];
    $en2=$_POST['b'];
    $en3=$_POST['c'];
    $en4=$_POST['d'];
    $en5=$_POST['e'];
 
   	$query = "INSERT INTO mf2 (username,en1,en2,en3,en4,en5) 
  			  VALUES('$usern', '$en1', '$en2','$en3','$en4','$en5')";
  	mysqli_query($db, $query);
    echo "THANKYOU FOR SUBMITTING FEEDBACK";
    header('location: thank.php');
    }
}
    


if(isset($_POST['submitf3']))
{   
    $usern=$_SESSION['username'];
    
    $user_check_queryf = "SELECT * FROM mf3 WHERE username='$usern' LIMIT 1";
  $resultf = mysqli_query($db, $user_check_queryf);
  $userf = mysqli_fetch_assoc($resultf);
  
  if ($userf) 
  { 
    if ($userf['username'] === $usern) 
    {
      
       header('location: alreadyf.php');
    }  
  }
    
    if (! $userf) 
    {
    
    $en1=$_POST['a'];
    $en2=$_POST['b'];
    $en3=$_POST['c'];
    $en4=$_POST['d'];
    $en5=$_POST['e'];
 
   	$query = "INSERT INTO mf3 (username,en1,en2,en3,en4,en5) 
  			  VALUES('$usern', '$en1', '$en2','$en3','$en4','$en5')";
  	mysqli_query($db, $query);
    echo "THANKYOU FOR SUBMITTING FEEDBACK";
    header('location: thank.php');
    }
}
    



if(isset($_POST['submitf4']))
{   
    $usern=$_SESSION['username'];
    
    $user_check_queryf = "SELECT * FROM mf4 WHERE username='$usern' LIMIT 1";
  $resultf = mysqli_query($db, $user_check_queryf);
  $userf = mysqli_fetch_assoc($resultf);
  
  if ($userf) 
  { 
    if ($userf['username'] === $usern) 
    {
      
       header('location: alreadyf.php');
    }  
  }
    
    if (! $userf) 
    {
    
    $en1=$_POST['a'];
    $en2=$_POST['b'];
    $en3=$_POST['c'];
    $en4=$_POST['d'];
    $en5=$_POST['e'];
 
   	$query = "INSERT INTO mf4 (username,en1,en2,en3,en4,en5) 
  			  VALUES('$usern', '$en1', '$en2','$en3','$en4','$en5')";
  	mysqli_query($db, $query);
    echo "THANKYOU FOR SUBMITTING FEEDBACK";
    header('location: thank.php');
    }
}
    



if(isset($_POST['submitf5']))
{   
    $usern=$_SESSION['username'];
    
    $user_check_queryf = "SELECT * FROM mf5 WHERE username='$usern' LIMIT 1";
  $resultf = mysqli_query($db, $user_check_queryf);
  $userf = mysqli_fetch_assoc($resultf);
  
  if ($userf) 
  { 
    if ($userf['username'] === $usern) 
    {
      
       header('location: alreadyf.php');
    }  
  }
    
    if (! $userf) 
    {
    
    $en1=$_POST['a'];
    $en2=$_POST['b'];
    $en3=$_POST['c'];
    $en4=$_POST['d'];
    $en5=$_POST['e'];
 
   	$query = "INSERT INTO mf5 (username,en1,en2,en3,en4,en5) 
  			  VALUES('$usern', '$en1', '$en2','$en3','$en4','$en5')";
  	mysqli_query($db, $query);
    echo "THANKYOU FOR SUBMITTING FEEDBACK";
    header('location: thank.php');
    }
}
    










//Admin login logic

if (isset($_POST['login_admin'])) 
{
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password_1']);

  if (empty($username)) 
  {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) 
  {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) 
  {

  	$query = "SELECT * FROM adminm WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) 
    {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: feedresult.php');
  	}else 
    {
  		echo "      Wrong usename/password combination .Please check username and password and retry with correct combination";
  	}
  }
}










?>