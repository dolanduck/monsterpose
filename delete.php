<?php

require 'app/init.php';

$id = $_REQUEST['id'];

$deletecomment = $db->prepare("DELETE comments FROM comments WHERE comment_id = :comment_id");
$deletecomment->execute(['comment_id' => $id ]);

header('Location: ' . $_SERVER['HTTP_REFERER']);




?>