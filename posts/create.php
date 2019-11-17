<?php
    session_start();
    if(isset($_POST['submit']))
    {
        require('../auth/config.php');
        require('../auth/db.php');

        // print_r($_SESSION);
        // $uname = $_SESSION['username'];
        // $query = "SELECT uid FROM users WHERE uname = '$uname'";

        // $result = mysqli_query($conn, $query);

        // $uid_assoc_array = mysqli_fetch_assoc($result);
        // // var_dump($uid);

        // $uid = $uid_assoc_array['uid'];

        $uid = $_SESSION['uid'];
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $date = mysqli_real_escape_string($conn, $_SESSION['date']);
        $desccc = mysqli_real_escape_string($conn, $_POST['description']);
        $hash = mysqli_real_escape_string($conn, $_POST['hash']);
        $query_submit = "INSERT INTO entry (uid, title, entry, description, hash) VALUES($uid, '$title', '$body','$desccc', '$hash')";

        if(mysqli_query($conn, $query_submit))
        {
            header("location: show_user_posts.php");
        }
        else
        {
            echo "ERROR: ". mysqli_error($conn);
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Diary</title>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
</head>
<body>

<div class="top">
   <div class="row"><a href="../welcome.php"><img src="icons/back-icon1.png" alt="Back"width="30%" height="30%"></a></div>    
</div>

<form  action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<p><b> DATE :</b><?php $_SESSION['date'] = date('M,d,Y'); echo date('M,d,Y '); ?></p>

<!-- <p style="text-align: center;font-size: 30px;"><b>Dairy Entry</b></p> -->
<div class="row"> <p style="font-size:40px;"><b>Title</b></p></div>
<input  type = "text" name = "title" required><br>

<div class="row"> <p style="font-size:20px;"><b>Description</b></p></div>
<input  type = "text" name = "description" ><br>

<div class="row"> <p style="font-size:20px;"><b>Hash</b></p></div>
<input  type = "text" name = "hash" placeholder = "#myfirstdiary #newlife"required><br>

    <textarea name = "body"></textarea>
    <script>
        CKEDITOR.replace( 'body' );
    </script><br><br>
    
    <input class="btn" type = "submit" name = "submit">
    
    </form>

</body>
</html>

