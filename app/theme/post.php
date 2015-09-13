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
 

 <div class="container-index">
 <div class="logo"></div>

 <div class="posts">
 
 <div class="post-section">
    <div class="heading">
      
    <div class="cat_info">
    <div class="cat_date"><?php echo $post['created']->format('g:i a') ?></div>
    <div class="cat_user"><span class="glyphicon glyphicon-user" style="padding-right: 7px;"></span><?php echo $post['user']; ?></div>
    </div>
    </div>

    <div class="sections">
        
        <div class="post">
    	<div class="post-title-big"><?php echo $post['title']; ?></div>
    	<div class="body">
         
         <?php echo $post['body']; ?>
 
        </div>
        </div>
      
 <div class="comments-area">
 <?php if(isset($_SESSION['loggedIn']) == false): ?>
 <p><a href="login.php">Sign</a> in or <a href="register.php">Create an account</a> to <b>comment</b>.</p>
 <?php else: ?>
 <form action="" method="POST">
 <div class="answer">What's your answer?</div>
 <textarea name="comments" cols="20" rows="10" class="comments"></textarea>
 <input type="submit" name="submit" class="comments-btn" value="Post answer">
 </form>
 <?php if(isset($errors)): ?>
 <?php foreach($errors as $error): ?>
 <p><div class="comment-error"><?php echo $error; ?></div></p>
 <?php endforeach; ?>
 <?php  endif;?>
 <?php endif; ?>

        </div>

        <div class="comments-divider"></div>
    
         <?php if(empty($comments)): ?>
         <p>There are 0 replies</p>
         <?php else: ?>
         <?php foreach($comments as $comment): ?> 
         <div class="media">

         

         <div class="media-left">
         <img class="media-object thumb" src="https://pbs.twimg.com/profile_images/558109954561679360/j1f9DiJi.jpeg">
    
         </div>
        <div class="media-body">
        <h4 class="media-heading"><?php echo $comment['user']; ?></h4>
        <font class="comment-text"><?php echo $comment['comment'];?>
        <?php if($comment['user'] == $_SESSION['loggedIn']): ?>
        <a href="http://localhost/monsterpose/delete.php?id=<?php echo $comment['comment_id']; ?>"><span class="glyphicon glyphicon-remove right"></span></font></a>
        
        <?php endif; ?>
        </div>
       
       </div>
       <?php endforeach; ?>  
       <?php endif;?>

  
    </div>
  
 </div>
 
 </div>

 
 </div>

 </body>

 
 </html>