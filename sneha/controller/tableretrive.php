<?php
session_start();

// Check if user is logged in and is an admin
if (!isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == 1) {
    header("Location: ../admin_home_page.php");
    exit();
}

$config = require("./config.php");
require("./model/DB.php");

$databaseConnection = new DatabaseConnection($config);
$conn = $databaseConnection->dbConnection();

// Fetch all users from the database
$sqlQuery = "SELECT * FROM `posts`";
$result = mysqli_query($conn, $sqlQuery);
?>