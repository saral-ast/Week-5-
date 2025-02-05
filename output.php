<?php 
    echo json_encode($_POST) . "<br>";
    echo "Hello User" . "<br>";
    echo $_POST['name'] . "<br>";
    echo "Name is {$_POST['name']} <br>";
    echo "Email is {$_POST['email']} <br>";
    // Do not display passwords in plain text for security reasons.
    echo "Password received {$_POST['password']}. <br>";
?>


