<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>To Do</title>
    <link rel="stylesheet" href="include/css/normalize.css">
    <link rel="stylesheet" href="include/css/style-profile.css">
</head>
<body>
    <div class="header">
        <?php include ('include/header.php'); ?>
    </div>
    
    <div class="profile">
        <div class="container">
            <div class="user-info">
                    <?php 
                    
                    if(isset($_SESSION['user']['name'])) {
                        echo "Hello ";
                        echo $_SESSION['user']['name'];
                        
                        } 
                    ?>
            </div>
        </div>
    </div>
        <?php include ('include/footer.php'); ?>

</body>