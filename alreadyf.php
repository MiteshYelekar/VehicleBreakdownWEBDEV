<?php 


  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Already feedback submitted</title>
	     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
   
</head>


<body style=  "background: url(https://images.wallpaperscraft.com/image/hand_art_wall_159643_1920x1080.jpg);  
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: auto;">

    <div class="header">
    <br><br><br><br><br><br><br><br><br>
	<h1 style="color:yellow;" align="center">YOU HAVE ALREADY SUBMITTED FEEDBACK.</h1>
	<br><br><br><br><br><br><br><br><br>
    </div>

        <style>
    
            p{
          
          font-size: 35px;
          text-align: center;
          margin-left: auto; 
          margin-right: auto;

               }
            

    
    
    

        </style>
    <p><a href="index.php"><b>GO TO HOME PAGE</b>
                   </a></p>  
		
		<br><br><br><br><br><br><br><br>
</body>
</html>
