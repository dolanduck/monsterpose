<?php

require 'app/init.php';



if(isset($_POST['submit'])) {
	$title = $_POST['title'];
	$body = $_POST['body'];
 

	if(!empty($title) && !empty($body)) {
      
      if(strlen($title) < 10) {
      	$errors[] = 'Title must be at least 10 characters long.';
      }  else if (strlen($title) > 100) {
        $errors[] = 'Title cannot be greater than 100 charactors.';
      } else if (strlen($body) < 15) {
      	$errors [] = 'The question must be at least 15 characters long.';
      } else if (strlen($body) > 1000) {
        $errors[] = 'Body cannot be greater than 1000 characters,';
      } else {
        $session_username = $_SESSION['loggedIn'];
      	$postquestion = $db->prepare("INSERT into questions (title,body,created,user) VALUES (:title,:body,NOW(),:user)");
      	$postquestion->execute(['title' => $title, 'body' => $body, 'user' => $session_username]);
        
      	if($postquestion = true) {
         $errors[] = 'Posted';
      	} else { 
         $errors[] = 'There was an error posting this question.';
      	}

      }

	} else {
		$errors[] = 'All fields are required.';
	}
}



require VIEW_ROOT . 'ask.php';




?>