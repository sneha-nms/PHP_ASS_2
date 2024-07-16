<?php
session_start();

if (!isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == 1) {
    header("Location: ../admin_home_page.php");
    exit();
}

$config = require("../config.php");
require("../model/DB.php");

$databaseConnection = new DatabaseConnection($config);
$conn = $databaseConnection->dbConnection();

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $userId = intval($_GET['id']);

    // Delete user
    $sqlDelete = "DELETE FROM `posts` WHERE `id` = $userId";
    if (mysqli_query($conn, $sqlDelete)) {
        echo "User deleted successfully.";
    } else {
        echo "Error deleting user.";
    }
    header("Location: ../view_users.php");
    exit();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="bg-white p-6 rounded shadow-md">
            <h1 class="text-2xl font-bold mb-4">Delete User</h1>
            <p class="text-red-600 font-bold mb-4">Are you sure you want to delete this user?</p>
            <form action="" method="GET">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
                    <a href="../admin_home.php" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
