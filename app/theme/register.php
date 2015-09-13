<!doctype html>
 <html lang="en">
 
 <head>
   <meta charset="UTF-8">
   <title>Monsterpose</title>
   <link rel="stylesheet" href="http://localhost/monsterpose/app/theme/css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="http://localhost/monsterpose/app/theme/css/global.css" type="text/css">
 </head>

 <body>

<div class="navbar navbar-default navbar-fixed-top">
     <div class="container">
     <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <?php if(isset($_SESSION['loggedIn'])): ?>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="current"><a href="index.php"><span class="glyphicon glyphicon-home" style="padding-right: 5px;"></span> Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-envelope" style="padding-right: 8px;"></span>Inbox <span class="badge">4</span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-star" style="padding-right: 5px;"></span>Favorites <span class="badge">7</span></a></li>
      </ul>
    
      
      <ul class="nav navbar-nav pull-right">
        <li class="current"><a href="ask.php"><span class="glyphicon glyphicon-plus" style="padding-right: 7px;"></span>Ask question</a></li>
        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <span class="glyphicon glyphicon-user" style="padding-right: 10px;"></span>Alam <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Reputation</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Sign out</a></li>
          </ul>
       
        </li>
      </ul>
    </div>
    <?php else: ?>
        
    <ul class="nav navbar-nav pull-right">
       
        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="login.php">Sign in</a></li>
            <li><a href="register.php">Register</a></li>
      
          </ul>
       
        </li>
      </ul>
    </div>

    <?php endif; ?>
    </div>
   
 </div>
 

 <div class="login-container">
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
 <input type="username" name="email" placeholder="Email">
 <input type="password" name="password" placeholder="Password">
 <input type="password" name="verify_password" placeholder="Verify Password">
 <input type="submit" name="submit" value="Sign up" class="btn">
 
 <div class="alt">
  Already have an account? <a href="login.php">Sign in</a>.
 </div>

 </form>

 </div>





 </div>

 </body>

 
 </html>