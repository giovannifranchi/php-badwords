<?php
    $blog = strtolower($_GET['blog']);
    $forbidden_word = strtolower($_GET['forbidden']);
    $replace = str_replace($forbidden_word, 'xxx', $blog);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <p><?php echo $blog ?> </p>
    <p><?php echo $replace ?></p>
</body>
</html>