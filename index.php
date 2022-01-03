<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
</head>
<body style= "background: url(https://wallpaperset.com/w/full/f/6/7/36197.jpg);  
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: auto;">

 <style>
     
     marquee{
      font-size: 30px;
      font-weight: 800;
      color: red;
      font-family: sans-serif;
      }

    div{
          
          
          text-align: center;
          margin-left: auto; 
          margin-right: auto;

       }
    
    
     p{
          
          font-size: 35px;
          text-align: center;
          margin-left: auto; 
          margin-right: auto;

        }
    
    h1{
        
        color: green;
      }
    

    
 </style>  
    
    <div class="header">
    <br><br><br>
	<h1>CUSTOMER HOME PAGE</h1><br><br><br><br><br>
    </div>
    
    
    <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
          <div class="error success" >
      	<h3>
          <?php 
//          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
          </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<br><br>
    	<p><a href ="map2.php"><b>Click here to get immediate help.</b></a></p>
    	<p><a href ="feedresult.php"><b>Click here to see the ratings of our mechanics.</b></a></p>
    	
    	<p> <a href="index.php?logout='1'" style="color: red;"><b>Logout</b></a> </p>
    <?php endif ?>
    </div>
		
</body>
</html>
