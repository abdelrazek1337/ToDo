<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ToDo Login</title>
    <link rel="stylesheet" href="include/css/normalize.css">
    <link rel="stylesheet" href="include/css/style-login.css">
</head>
<body>
    <div class="header">
        <?php include ('include/header.php'); ?>
    </div>
    
    <div class="container">
        <form class="login" action="postLogin.php"   method="post">
            <fieldset>
                <legend>ToDo Login</legend>
                E-Mail : 
                <input type="text" name="email"><br>
                Password : 
                <input type="password" name="password"><br><br>
                <input type="submit" name="Login" value="Login">
                <h5>Not Have an Account ! Please <a href="register.php">Register</a></h5>
            </fieldset>
        </form>
    </div>

    <?php include ('include/footer.php'); ?>

</body>
</html>