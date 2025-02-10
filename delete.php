<?php
    session_start(); 
   
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    <a href="./home.html">Link</a>
    <?php
     include_once("db_connect.php");
        //  $conn->query("SELECT * FROM users");
         if($conn->connect_error){
             echo "Table does not exist";
            }
        
          unset($_SESSION["favcolor"]);
          unset($_SESSION["favanimal"]);
          session_destroy();
          print_r($_SESSION);
          // cookie_destroy();
          session_write_close(); 
    ?>
</body>
</html>