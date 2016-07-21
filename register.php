<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>To Do</title>
    <link rel="stylesheet" href="include/css/normalize.css">
    <link rel="stylesheet" href="include/css/style-register.css">
</head>
<body>
    <div class="header">
        <?php include('/include/header.php'); ?>
    </div>
    <div class="container">
        <form class="register" action="postRegister.php" method="post">
            <fieldset>
                <legend>ToDo Register</legend>
                Your Name : 
                <input type="text" name="name"><br>
                E-Mail : 
                <input type="text" name="email"><br>
                Password : 
                <input type="password" name="password">
                <br><br>
                <input type="submit" name="Login" value="Login">
            </fieldset>
        </form>
    </div>
  
        <?php include ('include/footer.php'); ?>
</body>