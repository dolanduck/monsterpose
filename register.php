<?php 

require 'app/init.php';

if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$preg = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/"; 
	$verify_password = $_POST['verify_password'];

	if(!empty($username) && !empty($email) && !empty($password) && !empty($verify_password)) {
      
      $currentUserUsername = $db->prepare("SELECT username FROM users WHERE username=:username");
      $currentUserUsername->execute(['username' => $username]);

      $currentUserEmail = $db->prepare("SELECT email FROM users WHERE email=:email");
      $currentUserEmail->execute(['email' => $email]);

      
      if($currentUserUsername->rowCount() == 1) {
        $errors[] = 'This username already exists.';
      } else if ($currentUserEmail->rowCount() == 1) {
         $errors[] = 'There is already an account with this email.';
      } else {
          
          if(strlen($username) < 4) {
          	$errors[] = 'Username must be 4 to 25 characters long.';
          } else if (strlen($username) > 25) {
          	$errors[] = 'Username must be 4 to 25 characters long.';
          } else if (!preg_match($preg, $email)) {
          	$errors[] = 'Invalid email address';
          } else if(strlen($password) < 6) {
            $errors[] = 'Password must be at least 6 characters long.';
          } else if(strlen($password) > 20) {
          	$errors[] = 'Password cannot be longer than 20 characters.';
          } else if($password !== $verify_password) {
          	$errors[] = 'Passwords do not match';
          }  else {
             
            $hash = md5($password);

            $registeruser = $db->prepare("INSERT into users (username,email,password) VALUES (:username,:email,:password)");
            $registeruser->execute(['username' => $username, 'email' => $email, 'password' => $hash]);

            if ($registeruser = true ) {
                $_SESSION['loggedIn'] = $username;
                header('Location: index.php');
            } else {
            	$errors [] = 'There was an error creating the account, try again.';
            }
        
          }

      }

	} else {
		$errors[] = 'All fields are required.';
	}

}



require VIEW_ROOT . 'register.php';



?>