<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form was submitted
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    echo "Thank you, $name! We have received your email: $email <br><br>";
    echo '<a href="' . $_SERVER['PHP_SELF'] . '">Submit another response</a>';
} else {
    // Display the form
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
}
?>
