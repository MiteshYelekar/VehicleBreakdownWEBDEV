<?php include('server.php') ?>
<?php 

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }



?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TABLES</title>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
   
</head>
<body  style= "background: url(http://getwallpapers.com/wallpaper/full/3/b/8/789629-free-yellow-colour-wallpaper-1920x1200.jpg);  
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
      
 </style>   
  <br><br>
   <marquee scrollamount="17">PLEASE SELECT YOUR RATING FOR MECHANIC IN APPROPRIATE FIELDS</marquee>
   <br><br><br><br><br><br>
    <div>
      <form method="post">
      <table  border ="1" align="center">
      
       <tr>
           <td style="padding:10px"><b>FIELDS</b></td>
           <td style="padding:10px"><i>BEST</i></td>
           <td style="padding:10px"><i>GOOD</i></td>         
           <td style="padding:10px"><i>AVERAGE</i></td>           
           <td style="padding:10px"><i>BAD</i></td>
           <td style="padding:10px"><i>WORST</i></td>
       </tr>
       <tr>
           <td style="padding:10px"><b>knowledge</b> </td>
           <td style="padding:10px"> <input type="radio" name="a" value="4" required>  </td>
           <td style="padding:10px"> <input type="radio" name="a" value="3" required>  </td>
           <td style="padding:10px"><input type="radio" name="a" value="2" required>  </td>
           <td style="padding:10px"><input type="radio" name="a" value="1" required> </td>
           <td style="padding:10px"><input type="radio" name="a" value="0" required> </td>
           
       </tr>

       <tr>
           <td style="padding:10px"><b>Pace </b> </td>
           <td style="padding:10px"><input type="radio" name="b" value="4" required>  </td>
           <td style="padding:10px"><input type="radio" name="b" value="3" required>  </td>
           <td style="padding:10px"><input type="radio" name="b" value="2" required>  </td>
           <td style="padding:10px"><input type="radio" name="b" value="1" required>  </td>
           <td style="padding:10px"><input type="radio" name="b" value="0" required>  </td>
           
       </tr>              
       
       <tr>
           <td style="padding:10px"><b>interest</b> </td>
           <td style="padding:10px"><input type="radio" name="c" value="4" required>  </td>
           <td style="padding:10px"><input type="radio" name="c" value="3" required>  </td>
           <td style="padding:10px"><input type="radio" name="c" value="2" required>  </td>
           <td style="padding:10px"><input type="radio" name="c" value="1" required>  </td>
           <td style="padding:10px"><input type="radio" name="c" value="0" required>  </td>
           
       </tr>
       
       <tr>
           <td style="padding:10px"><b>Doubt clearance </b> </td>
           <td style="padding:10px"><input type="radio" name="d" value="4" required>  </td>
           <td style="padding:10px"><input type="radio" name="d" value="3" required>  </td>
           <td style="padding:10px"><input type="radio" name="d" value="2" required>  </td>
           <td style="padding:10px"><input type="radio" name="d" value="1" required>  </td>
           <td style="padding:10px"><input type="radio" name="d" value="0" required>  </td>
          
       </tr>              
            
       <tr>
           <td style="padding:10px"><b>Financial worthiness of repair</b> </td>
           <td style="padding:10px"><input type="radio" name="e" value="4" required>  </td>
           <td style="padding:10px"><input type="radio" name="e" value="3" required>  </td>
           <td style="padding:10px"><input type="radio" name="e" value="2" required>  </td>
           <td style="padding:10px"><input type="radio" name="e" value="1" required>  </td>
           <td style="padding:10px"><input type="radio" name="e" value="0" required>  </td>
          
       </tr>                                           
                                   
     </table>
   
   <br><br><br><br><br><br>
   <style>
       button{
           text-align: center;
           }
       
    </style>
   <button type="submit" class="btn btn-primary" name="submitf5" value="Inser Record" >            SUBMIT FEEDBACK </button>

       
   
   
    </form>
    </div>
    
</body>
</html>