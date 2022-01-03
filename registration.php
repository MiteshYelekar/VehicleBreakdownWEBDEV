<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
</head>
<body style= "background: url(https://wallpaperset.com/w/full/5/9/8/90880.jpg);  
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: auto;">
  
   <br><br><br><br>
   <style>

    div
       {   
          text-align: center;
          margin-left: auto; 
          margin-right: auto    
       }
    
</style>         
    <div class="container">
       <h1>CUSTOMER REGISTRATION PAGE</h1><br><br><br><br><br>
       <div class="col-sm-6">
           <form action="registration.php" method="post">
           
           <?php include ('errors.php') ?>
            
             
              <div class ="form-group">
                 <label for="username">NAME</label>
                  <input type="text" name="username" class="form-control" required>
              </div>
              <div class ="form-group">
                 <label for="email">EMAIL</label>
                  <input type="text" name="email" class="form-control" required>
              </div>
              <div class ="form-group">
                 <label for="password">PASSWORD</label>
                  <input type="password" name="password_1" class="form-control" required>
              </div>
              <div class ="form-group">
                 <label for="password">CONFIRM PASSWORD</label>
                  <input type="password" name="password_2" class="form-control" required>
              </div>
              <button type="submit" class="btn-primary" name="reg_user">Register</button>
               <p>Already Registered?  <a href="login.php"><b>LOGIN</b>
                   </a></p>
  
           </form>
        </div>
    </div>   
</body>
</html>