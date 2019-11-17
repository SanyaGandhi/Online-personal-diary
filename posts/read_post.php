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
    <title>Document</title>
</head>
<body>

<div>
	<a href="<?php echo ROOT_URL; ?>posts/show_user_posts.php">Back</a>
    <h1><?php echo $post['title']; ?></h1>	
    <small>Created on <?php echo $post['created_at']; ?></small>
    <p><?php echo $post['entry']; ?></p>
    <?php 
        if($_SESSION['uid'] == $post['uid']) 
        {
            echo "<a href=update.php?id=". $post['pid']. ">Update</a>";
        } 
    ?>
</div>

</body>
</html>