<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>To Do</title>
    <link rel="stylesheet" href="include/css/normalize.css">
    <link rel="stylesheet" href="include/css/style.css">
    <link rel="stylesheet" href="include/css/jquery.quicknote.css" />
</head>
<body>

<!-- Start Header -->

<?php include ('include/header.php'); ?>

<?php
if(empty($_SESSION['user']['id'])){
    header("Location:login.php");
}

?>

<!-- End Header -->

<?php

    $sql = "SELECT id,tasksubject FROM tasks WHERE active=0 and user_id = {$_SESSION['user']['id']}";
    $query = mysql_query($sql) or die(mysql_error());
    $rows = array();

    while($row = mysql_fetch_array($query))
        $rows[] = $row;

?>

<!-- Start Note -->


<div class="mainnote">
    <div class="container">
        <div id="qn">

            <div id="notes">
               <p>
                    <input type="text" id='qn_input' name="qn_input" maxlength="500" placeholder="Your Notes...">
               </p>

                <?php foreach($rows as $row){?>
                <span class="quicknote" id="qn_<?=$row['id'];?>" style="display: table;"><span class="close"></span>
                <span class="share"></span><?php echo $row['tasksubject']; ?></span>
                <?php }  ?>
            </div>
        </div>
    </div>
</div>


<!-- End Note -->


<script type="text/javascript" src="include/js/jquery-3.0.0.min.js"></script>
<script type="text/javascript" src="include/js/jquery.quicknote.js"></script>
<script type="text/javascript">
    $(function(){
        $('#qn').quicknote();
    });
</script>

</body>
</html>
