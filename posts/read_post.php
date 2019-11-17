<?php
    session_start();
    require('../auth/config.php');
	require('../auth/db.php');

	// get ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	// Create Query
	$query = "SELECT * FROM entry WHERE pid = '$id'";

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$post = mysqli_fetch_assoc($result);
	//var_dump($posts);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="read_style.css">
    <title><?php echo $post['title']; ?></title>
</head>
<body>

<div>
	<button class = "btn-grey"><a href="<?php echo ROOT_URL; ?>posts/show_user_posts.php" >Back</a></button>
    <div class="main">
        <h1><?php echo $post['title']; ?></h1>	

    <small>Created on <?php echo $post['created_at']; ?></small>
    <div class="entry">
    <p><?php echo $post['entry'];?></p>
    </div>
    </div>
    <?php 
        if($_SESSION['uid'] == $post['uid']) 
        {
            echo "<button class = 'btn-green'><a href=update.php?id=". $post['pid']. ">Update</a></button>";
        }
    ?>
</div>

</body>
</html>