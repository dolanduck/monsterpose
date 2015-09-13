<?php

require_once 'app/init.php';

$posts = $db->query("
   
  SELECT
  questions.question_id,
  questions.title,
  questions.body,
  questions.created,
  questions.user,
  count(comments.comment_id) AS comments_count

FROM questions
   LEFT JOIN comments ON comments.post_id = questions.question_id

GROUP BY questions.question_id DESC

");


require VIEW_ROOT . 'index.php';



?>