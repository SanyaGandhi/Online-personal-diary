<?php
    require('../auth/config.php');
    require('../auth/db.php');
    $uname = $_POST["user_name"];
    $pass = $_POST["user_pass"];

    $query = "SELECT * from users WHERE uname = '$uname' and pass = '$pass'";

    $result = mysqli_query($conn, $query) or die(mysql_error($con));

    $count = mysqli_num_rows($result);
    if ($count<=0)
    {
    echo"Sorry, your credentials are not valid, Please try again.";
    }
    else {
    echo"You are a validated user.";
    }
?>
