<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: adminlogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: adminlogin.php");
  }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
</head>
<body style= "background: url(https://wallpaperset.com/w/full/f/5/f/36294.jpg);  
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: auto;">


    <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
          <div class="error success" >
      	    <h3>
              <?php 
          	
          	unset($_SESSION['success']);
          ?>
      	    </h3>
          </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <br>
    	    <p style ="color:white"align ="center">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	
            <div class="header">
	        <h1 style="color:magenta" align="center">FEEDBACK RESULT</h1><br><br><br>
            </div>	
    
    <a href="f1.php"><h4>FEEDBACK REULT OF GEAR CARE SERVICE</h4></a><br><br>
    <a href="f2.php"><h4>FEEDBACK REULT OF DHANTOLI SERVICE</h4></a><br><br>
    <a href="f3.php"><h4>FEEDBACK REULT OF KHAMLA SERVICE</h4></a><br><br>
    <a href="f4.php"><h4>FEEDBACK REULT OF MAHIND SERVICE</h4></a><br><br>
    <a href="f5.php"><h4>FEEDBACK REULT OF KAMPTEE SERVICE</h4></a><br><br>
   
              
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
      
    <br><br>
    <p style="font-size:35px" align="center"> <a href="index.php?logout='1'" style="color: red;"><b>LOGOUT</b></a> </p>
    <?php endif ?>
    </div>
		
</body>
</html>