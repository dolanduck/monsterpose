<?php

require 'app/init.php';

if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	if(!empty($username) && !empty($password)) {
      $validateuser = $db->prepare("SELECT * FROM users WHERE username=:username and password = :password");
      $validateuser->execute(['username' => $username, 'password' => $password]);
      
      if($validateuser->rowCount() == 1) {
        $_SESSION['loggedIn'] = $username;
        header('Location: index.php');
      } else {
      	$errors[] = 'Invalid credentials.';
      }
	} else {
		$errors[] = 'Fill in both fields.';
	}
}


require VIEW_ROOT . 'login.php';


?>