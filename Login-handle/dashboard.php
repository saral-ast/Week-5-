
<!-- // dashboard.php -->
<?php
require_once 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

checkSession();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen p-6">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
                <a href="logout.php" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Logout
                </a>
            </div>
            
            <div class="mb-4">
                <p>Session will expire in 3 minutes of inactivity.</p>
                <p>Last activity: <?php echo date('Y-m-d H:i:s', $_SESSION['last_activity']); ?></p>
            </div>
            
            <!-- Add your dashboard content here -->
        </div>
    </div>
</body>
</html>
