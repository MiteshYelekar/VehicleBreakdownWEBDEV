<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
   
</head>
<body style= "background: url(https://wallpaperset.com/w/full/5/9/8/90880.jpg);  
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: auto;">
  
  <br><br><br><br>

 <style>

    div{
          
          
          text-align: center;
          margin-left: auto; 
          margin-right: auto;

       }
    

    
 </style>           
    <div  class="container">
       <h1>CUSTOMER LOGIN PAGE</h1><br><br><br><br><br>
   
       <div class="col-sm-6">
           <form action="login.php" method="post">
            
  
              <div  class ="form-group">
                 <label for="username">NAME</label>
                  <input type="text" name="username" class="form-control" required>
              </div>
   
              <div align ="centre" class ="form-group">
                 <label for="password">PASSWORD</label>
                  <input type="password" name="password_1" class="form-control" required>
              </div>
 
             <button type="submit" class="btn btn-primary" name="login_user">Login</button>
           
               <p>Not Registered?  <a href="registration.php"><b>CUSTOMER REGISTER</b>
                   </a></p>
                   
               <p>ADMIN ?  <a href="adminlogin.php"><b>ADMIN LOGIN</b>
                   </a></p>                   
           </form>
        </div>
    </div>   
</body>
</html>