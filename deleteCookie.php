<?php
   setcookie("user", "", time() - 3600);
    setcookie("role", "", time() - 3600); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    // print_r($_COOKIE);
    if(!isset($_COOKIE["user"])) {
        if(!isset($_COOKIE["role"])) {

      echo "Cookie named 'user' is not set!";
      echo "Cookie named 'role' is not set!";
        }
    }
    ?>
</body>
</html>