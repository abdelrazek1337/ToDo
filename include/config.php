<?php

session_start();
  
$connect = mysql_connect("localhost","root","") or die("not connected");

mysql_select_db("todo") or die("database not found");

?>