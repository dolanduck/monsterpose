<?php

require 'app/init.php';


$id = $_REQUEST['id'];

$singlepost = $db->prepare("SELECT * FROM questions WHERE question_id = :question_id");
$singlepost->execute(['question_id' => $id]);

$post = $singlepost->fetch(PDO::FETCH_ASSOC);


$post['created'] = new Datetime($post['created']);

if(isset($_POST['submit'])) {
	$comment = $_POST['comments'];

	if(!empty($comment)) {
      if(strlen($comment) < 10) {
      	$errors[] = 'Comment must be at least 10 characters long.';
      } else {
      	 $postcomment = $db->prepare("INSERT into comments (post_id,comment,user,created) VALUES (:post_id, :comment, :user ,NOW())");
      	 $postcomment->execute(['post_id' => $id, 'comment' => $comment, 'user' => $_SESSION['loggedIn']]);
      	 header('Location: post.php?id='. $id);
      }
	} else {
		$errors[] = 'Comment cannot be empty.';
	}
}

$comments = $db->prepare("SELECT * FROM comments WHERE post_id = :post_id");
$comments->fetchAll(PDO::FETCH_ASSOC);
$comments->execute(['post_id' => $id]);



$deletecomment = $db->prepare("DELETE comments.post_id FROM comments WHERE post_id = :post_id");
$deletecomment->execute(['post_id' => $id ]);




require VIEW_ROOT . 'post.php';



?>