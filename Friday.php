<?php
$cookie_name = "user";
$cookie_value = "Saral";
$cookie_name2 = "role";
$cookie_value2 = "Admin";


setcookie($cookie_name, $cookie_value, time() + 20, "/");
setcookie($cookie_name2, $cookie_value2, time() + 20, "/");
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
setcookie("user", "", time() - 3600);
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
  echo "Role is". $_COOKIE[$cookie_name2]. "<br>";
 print_r($_COOKIE);

}
?>
</body>
</html>