<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        .error { color: red; }
        .success { color: green; }
        .form-group { margin-bottom: 15px; }
    </style>
</head>
<body>
<?php
// Initialize variables
$nameErr = $emailErr = $phoneErr = "";
$name = $email = $phone = $file = "" ;
$formSubmitted = false;
$isValid = true;
$showData = false;

// Form validation when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formSubmitted = true;
    
    // Validate Name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $isValid = false;
    } else {
        $name = test_input($_POST["name"]);
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
            $isValid = false;
        }
    }
    
    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $isValid = false;
    } else {
        $email = test_input($_POST["email"]);
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $isValid = false;
        }
    }
    
    // Validate Phone
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone number is required";
        $isValid = false;
    } else {
        $phone = test_input($_POST["phone"]);
        // Check if phone number format is valid (simple check for digits only)
        if (!preg_match("/^[0-9]{10}$/", $phone)) {
            $phoneErr = "Invalid phone number (must be 10 digits)";
            $isValid = false;
        }
    }


    // If form is valid, store data for display and reset form
    if ($isValid) {
        $showData = true;
        $displayName = $name;
        $displayEmail = $email;
        $displayPhone = $phone;
        $displayFile = $file;
        
        // Reset form fields
        $name = "";
        $email = "";
        $phone = "";
    }
}

// Function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!-- Form -->
<h2>Registration Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
    </div>

    <div class="form-group">
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
    </div>

    <div class="form-group">
        <label>Phone:</label>
        <input type="text" name="phone" value="<?php echo $phone;?>">
        <span class="error">* <?php echo $phoneErr;?></span>
    </div>
    <div class="form-group">
        <label>File</label>
        <input type="file" name="file">
    </div>

    <input type="submit" value="Submit">
</form>

<?php
// Display submitted data if form was valid
if ($showData) {
    echo "<h2>Your Submitted Data:</h2>";
    echo "<div class='success'>";
    echo "Name: " . $displayName . "<br>";
    echo "Email: " . $displayEmail . "<br>";
    echo "Phone: " . $displayPhone . "<br>";
    echo "File". $displayFile . "<br>";
    echo "</div>";
}
?>
</body>
</html>