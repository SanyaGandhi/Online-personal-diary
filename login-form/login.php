<?php
    session_start();

    require('../auth/config.php');
    require('../auth/db.php');
    $uname = $_POST["user_name"];
    $pass = $_POST["user_pass"];

    $password = md5($pass);
    $query = "SELECT * from users WHERE uname = '$uname' and pass = '$password'";

    $result = mysqli_query($conn, $query) or die(mysql_error($conn));

    $count = mysqli_num_rows($result);
    if ($count<=0)
    {
    echo"Sorry, your credentials are not valid, Please try again.";
    }
    else {
    echo"You are a validated user.";
    $_SESSION['username'] = $uname;
    $_SESSION['success'] = "You are now logged in";
    header('location: ../welcome.php');
    }
?>
