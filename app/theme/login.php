<!doctype html>
 <html lang="en">
 
 <head>
   <meta charset="UTF-8">
   <title>Monsterpose</title>
   <link rel="stylesheet" href="http://localhost/monsterpose/app/theme/css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="http://localhost/monsterpose/app/theme/css/global.css" type="text/css">
 </head>

 <body>

<div class="topnav">

</div>
 

 <div class="container">
 <a href="index.php"><div class="logo"></div></a>

 <div class="loginBox">
 <div class="error">
 	   <?php
     if(!empty($errors)) {
     foreach($errors as $error) {
     	echo $error;
     }
 }
   ?>
 </div>
 <form action="" method="POST">
 
 <input type="username" name="username" placeholder="Username">
 <input type="password" name="password" placeholder="Password">
 <input type="submit" name="submit" value="Sign in" class="btn">
 
 <div class="alt">
  Don't have an account? <a href="register.php">Signup</a>.
 </div>

 </form>

 </div>





 </div>

 </body>

 
 </html>