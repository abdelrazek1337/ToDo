<?php
include ('/include/config.php');

$name     = $_POST['name'];
$email    = $_POST['email'];
$password = $_POST['password'];

$sql="SELECT email FROM users WHERE email ='$email'";
$query = mysql_query($sql);
$numrows = mysql_num_rows($query);

    // Email Validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

    } else {
        echo("$email is not a valid email address");
        die();
}
    if ($numrows>0){
        die ("this email exist.");

}   elseif ($email && $password) {
        $query = mysql_query("INSERT INTO users (name,email,password) VALUES ('$name','$email',md5('$password'))");

        $_SESSION['user']['id']=$id;
        $_SESSION['user']['name']=$name;
        $_SESSION['user']['email']=$email;

        echo "<h2 style='text-align:center;color:lawngreen;margin:auto;border-style:solid;border-color:lawngreen;padding-top:50px;'>Registration Completed Successfully.</h2>";
        echo "<h3 style='text-align:center;padding-top:50px;'>Please wait 5 second to redirect to your profile.</h3>";
        header( "refresh:5;url=profile.php" );
}
    else {
            die("plz enter your name, email and password");
        }

?>
