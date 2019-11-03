<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Diary</title>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
</head>
<body>
    <button><a href="../welcome.php">Back</a></button>
    <form action="#" method="post">
    <p>Date</p>
    <input type="text" placeholder = "<?php echo date('M,d,Y h:i:s A'); ?>" name = "date"> 
    <p>Title</p>
    <input type = "text" name = "title">
    <p>Dairy Entry</p>
    <textarea name = "post"></textarea>
    <script>
        CKEDITOR.replace( 'post' );
    </script>
    <input type = "submit" name = "create_new_entry">
    </form>
</body>
</html>