<?php include ('/include/config.php');?>
<div class="navbar">
    <div class="container">
        <h1>ToDo</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php if(empty($_SESSION['user'])):?>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <?php else:?>
            <li><a href="profile.php">My Account</a></li>
            <li><a href="logout.php">Logout</a></li>
            <?php endif;?>
        </ul>

    </div>

</div>