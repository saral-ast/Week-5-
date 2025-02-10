<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
print_r($_SESSION);
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

?>
  <form action="delete.php">
    <input type="submit" value="Delete session">
  </form>

</body>
</html>