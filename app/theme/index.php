<!doctype html>
 <html lang="en">
 
 <head>
   <meta charset="UTF-8">
   <title>Monsterpose</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="http://localhost/monsterpose/app/theme/css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="http://localhost/monsterpose/app/theme/css/global.css" type="text/css">
   <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script src="http://localhost/monsterpose/app/theme/js/bootstrap.min.js"></script>
   
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
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <?php if(isset($_SESSION['loggedIn'])): ?>
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
 
 <div class="container">
 <div class="logo"></div>

 <div class="posts">
 
 <div class="category">
    <div class="heading">
    <div class="cat_name"><font class="bigger">A community</font> <br />for Developers, Hackers, Gamers, and Designers</div></div>
    <div class="sections">
    <div class="container-fluid">

        <?php if(empty($posts)): ?>
        <p>There are no posts</p>

        <?php else: ?>

        <?php foreach($posts as $post): ?>

 <div class="row post">
         <div class="row">
          <div class="col-xs-5 title"><a href="http://localhost/monsterpose/post.php?id=<?php echo $post['question_id']; ?>"><?php echo $post['title']; ?></a></div>
          <div class="col-xs-2 replies"><span class="glyphicon glyphicon-comment" style="padding-right:7px;"></span> <?php echo $post['comments_count'] ?> Replies</div>
          <div class="col-xs-2 date"><span class="glyphicon glyphicon-time" style="padding-right:4px;"></span> 5:48 pm</div>
          <div class="col-xs-3 user"><span class="glyphicon glyphicon-user" style="padding-right: 4px;"></span> <?php echo $post['user']; ?></div>
        </div>
 </div>

<?php  endforeach;?>
<?php endif; ?>

</div>
 </div>

 </div>

 </div>
 
 </div>

 </div>

 </body>

 
 </html>