<?php
    session_start();
    require('../auth/config.php');
    require('../auth/db.php');
    $pid = mysqli_real_escape_string($conn, $_GET['id']);

    $query = "SELECT * FROM entry WHERE pid = '$pid'";
    // Get Result
    $result = mysqli_query($conn, $query);

    // Fetch Data
    $post = mysqli_fetch_assoc($result);
    //var_dump($posts);

    // Free Result
    mysqli_free_result($result);

    // Close Connection
    mysqli_close($conn);
    if($_SESSION['uid'] != $post['uid'])
    {
        header("location: ../welcome.php");
    }
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
        $desccc = mysqli_real_escape_string($conn, $_POST['description']);
        $hash = mysqli_real_escape_string($conn, $_POST['hash']);
        $query_submit = "UPDATE entry 
                        SET title = '$title', entry = '$body', description = '$desccc', hash = '$hash'
                        WHERE pid = '$pid';";

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
<p><b> DATE :</b><?php echo $post['created_at'] ?></p>

<!-- <p style="text-align: center;font-size: 30px;"><b>Dairy Entry</b></p> -->
<div class="row"> <p style="font-size:40px;"><b>Title</b></p></div>
<input  type = "text" name = "title" value = <?php echo $post['title'];?>><br>

<div class="row"> <p style="font-size:20px;"><b>Description</b></p></div>
<input  type = "text" name = "description" value = <?php echo $post['description'];?>><br>

<div class="row"> <p style="font-size:20px;"><b>Hash</b></p></div>
<input  type = "text" name = "hash" placeholder = "#myfirstdiary #newlife" value = <?php echo $post['hash'];?>><br>

    <textarea name = "body" value = <?php echo $post['entry'];?>></textarea>
    <script>
        CKEDITOR.replace( 'body' );
    </script><br><br>
    <div class="sbmt-btn">
    <input class="btn" type = "submit" name = "submit" value = "Update">
    </div>
    </form>

</body>
</html>

