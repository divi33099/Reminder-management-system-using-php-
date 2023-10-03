<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    $userprofile=$_SESSION['userId'];
    if($userprofile==true){}
    else{
        header("Location:index.php");
    }
    echo'
    <div class="header">
        <h1>Welcome to the Reminder Application '.$_SESSION['name'].'</h1>
        <h2>Today is '.date("l jS \of F Y").'</h2>
    </div>
    <div class="disp-section">
        <ul>
            <li><a href="add.php">Set  Reminder</a></li>
            <li><a href="modify.php">Modify  Reminder</a></li>
            <li><a href="disable.php">Disable  Reminder</a></li>
            <li><a href="delete.php">Delete  Reminder</a></li>
            <li><a href="enable.php">Enable  Reminder</a></li>
            <li><a href="view.php">View Your Reminder</a></li>
            <li><a href="index.php"><input id="btn" type="submit" value="Logout"></a></li>
        </ul>
    </div>';


?>
</body>
</html>