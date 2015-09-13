<?php
session_start();
define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/theme/');

$db = new PDO("mysql:host=localhost;dbname=monsterpose", "root", "");


?>