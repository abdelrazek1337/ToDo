<?php
include ('/include/config.php');

$email = $_POST['email'];
$password = $_POST['password'];

if($email && $password){
    $password= md5($password);
    $sql="SELECT * FROM users WHERE email = '$email' AND password='$password' ";

    $query = mysql_query($sql);
    $numrows = mysql_num_rows($query);

if ($numrows>0){
    
    while ($row = mysql_fetch_array($query)) {
    $_SESSION['user']=$row;
    
}

    header("Location:profile.php");
    
}  else {
    die("this user not exist.");
}
}  else {   
    die("plz enter your email and password");
}
?>