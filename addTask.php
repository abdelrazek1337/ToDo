<?php
include ('/include/config.php');

$taskSubject = $_POST['taskSubject'];
 
$sql="INSERT INTO tasks (tasksubject,created_at,user_id) VALUES ('$taskSubject',NOW(),{$_SESSION['user'][0]})";
$query = mysql_query($sql);

?>