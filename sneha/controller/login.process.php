<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$config = require("../config.php");
require("../model/DB.php");

$databaseConnection = new DatabaseConnection($config);
$conn = $databaseConnection->dbConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM `registerDetails` WHERE `EmailAddress` = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['Password'])) {
            $_SESSION['email'] = $user['EmailAddress'];
            $_SESSION['name'] = $user['Name'];
            $_SESSION['courseName'] = $user['CourseName'];
            $_SESSION['is_admin'] = $user['is_admin'];

            $redirectUrl = $user['is_admin'] == 1 ? "../admin_home_page.php" : "../index.php";
            header("Location: $redirectUrl");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email address.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
