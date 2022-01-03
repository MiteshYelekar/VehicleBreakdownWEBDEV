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
	<title>RESULT</title>
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
    	
    	<?php 
        $count1 = 0;
        $count2 = 0;
        $count3 = 0;
        $count4 = 0;
        $count5 = 0;
        $countn = 0;
        $en1f;
        $en2f;
        $en3f;
        $en4f;
        $en5f;
    
        $dbf = mysqli_connect('localhost', 'root', '', 'vehicle')or die("Could not connect to database");
        
        $queryA="SELECT * FROM mf4";
        $resultA=mysqli_query($dbf,$queryA);
            while($row = mysqli_fetch_array($resultA))
            {
                $count1 = $count1 + $row['en1'];
                $count2 = $count2 + $row['en2'];
                $count3 = $count3 + $row['en3'];
                $count4 = $count4 + $row['en4'];
                $count5 = $count5 + $row['en5'];
                
                $countn = $countn + 1;
                
                
            }   
            
        $en1f=$count1*25/$countn;
        $en2f=$count2*25/$countn;
        $en3f=$count3*25/$countn;
        $en4f=$count4*25/$countn;
        $en5f=$count5*25/$countn;
    
    
    
        
    $dataPoints = array(
	array("label"=> "knowledge", "y"=> $en1f ),
	array("label"=> "Pace ", "y"=> $en2f ),
	array("label"=> "interest", "y"=> $en3f ),
	array("label"=> "Doubt clearance", "y"=> $en4f ),
	array("label"=> "Money worthy", "y"=> $en5f ),

);
	
    
  ?>

        
        
        
        <script>
            window.onload = function () 
            {
 
                var chart = new CanvasJS.Chart("chartContainer", 
                    {
	                       animationEnabled: true,
	                   theme: "dark2", // "light1", "light2", "dark1", "dark2"
	                   title: 
                              {
                        text: "OVERALL RATING IN EACH FIELD"
                               },
	                   axisY: 
                                {
		                          title: "%",
                                  includeZero: true
                                },
	                   data: 
                              [{
		                          type: "column",
                                  dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	                           }]
                   
                    });
            chart.render();
 
            }
        </script>
       


              
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js">
        </script>                                          
    	
    <br><br>
    <p style="font-size:35px" align="center"> <a href="index.php?logout='1'" style="color: red;"><b>LOGOUT</b></a> </p>
    <?php endif ?>
    </div>
		
</body>
</html>