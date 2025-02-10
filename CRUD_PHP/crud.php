<?php
// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "crud_app";

// Create Connection
$conn = new mysqli($servername, $username, $password);

// Create Database if not exists
$conn->query("CREATE DATABASE IF NOT EXISTS $database");
$conn->select_db($database);

// Create Table if not exists
$conn->query("CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
)");

// Insert Record
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
    header("Location: ".$_SERVER['PHP_SELF']);
}

// Delete Record
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $conn->query("DELETE FROM users WHERE id=$id");
    header("Location: ".$_SERVER['PHP_SELF']);
}

// Update Record
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: ".$_SERVER['PHP_SELF']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6 flex justify-center">

<div class="max-w-3xl w-full bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">PHP CRUD with Tailwind UI</h2>

    <!-- Add Form -->
    <form method="POST" class="flex flex-col gap-4">
        <input type="text" name="name" placeholder="Enter Name" class="border p-3 rounded-lg focus:ring-2 focus:ring-blue-500" required>
        <input type="email" name="email" placeholder="Enter Email" class="border p-3 rounded-lg focus:ring-2 focus:ring-blue-500" required>
        <button type="submit" name="add" class="bg-green-500 text-white px-5 py-3 rounded-lg hover:bg-green-600 transition">Add User</button>
    </form>

    <!-- Display Records -->
    <div class="mt-6 overflow-auto max-h-60 border border-gray-200 shadow-md rounded-lg">
        <table class="w-full text-left text-gray-700">
            <thead class="bg-gray-100 sticky top-0">
                <tr>
                    <th class="px-4 py-3 border-b">ID</th>
                    <th class="px-4 py-3 border-b">Name</th>
                    <th class="px-4 py-3 border-b">Email</th>
                    <th class="px-4 py-3 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM users");
                while ($row = $result->fetch_assoc()):
                ?>
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-4 py-3 border-b"><?= $row['id'] ?></td>
                    <td class="px-4 py-3 border-b"><?= $row['name'] ?></td>
                    <td class="px-4 py-3 border-b"><?= $row['email'] ?></td>
                    <td class="px-4 py-3 border-b">
                        <button onclick="openEditModal(<?= $row['id'] ?>, '<?= $row['name'] ?>', '<?= $row['email'] ?>')" class="text-blue-500 hover:underline">Edit</button> |
                        <button onclick="openDeleteModal(<?= $row['id'] ?>)" class="text-red-500 hover:underline">Delete</button>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Edit Modal -->
<div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h3 class="text-xl font-bold mb-4 text-gray-700">Edit User</h3>
        <form method="POST" class="flex flex-col gap-4">
            <input type="hidden" name="id" id="editId">
            <input type="text" name="name" id="editName" class="border p-3 rounded-lg focus:ring-2 focus:ring-blue-500" required>
            <input type="email" name="email" id="editEmail" class="border p-3 rounded-lg focus:ring-2 focus:ring-blue-500" required>
            <button type="submit" name="update" class="bg-blue-500 text-white px-5 py-3 rounded-lg hover:bg-blue-600 transition">Update</button>
            <button type="button" onclick="closeModal('editModal')" class="bg-gray-400 text-white px-5 py-3 rounded-lg hover:bg-gray-500 transition">Cancel</button>
        </form>
    </div>
</div>

<!-- Delete Modal -->
<div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h3 class="text-xl font-bold mb-4 text-gray-700">Are you sure?</h3>
        <form method="POST" class="flex flex-col gap-4">
            <input type="hidden" name="id" id="deleteId">
            <button type="submit" name="delete" class="bg-red-500 text-white px-5 py-3 rounded-lg hover:bg-red-600 transition">Delete</button>
            <button type="button" onclick="closeModal('deleteModal')" class="bg-gray-400 text-white px-5 py-3 rounded-lg hover:bg-gray-500 transition">Cancel</button>
        </form>
    </div>
</div>

<script>
function openEditModal(id, name, email) {
    document.getElementById("editId").value = id;
    document.getElementById("editName").value = name;
    document.getElementById("editEmail").value = email;
    document.getElementById("editModal").classList.remove("hidden");
}
function openDeleteModal(id) {
    document.getElementById("deleteId").value = id;
    document.getElementById("deleteModal").classList.remove("hidden");
}
function closeModal(modalId) {
    document.getElementById(modalId).classList.add("hidden");
}
</script>

</body>
</html>
