<?php
session_start();
$isLoggedIn = isset($_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Navbar Example</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<style>
    #nav {
        background-color: lightpink;
    }

    body {
        background-color: white;
    }

    #btn {
        background-color: blue;
    }
    #btnn{
        background-color: greenyellow;
    }
</style>

<body class="h-screen" id="body">
    <header>
        <?php require "./view/partials/header.php" ?>
    </header>
    <main>
        <div class="content-wrap flex justify-center items-center h-5/6 bg-slate-700">
            <div class="bg-white p-10 m-10 rounded-3xl">
                <p class="text-center"> YOU Want to create a Post Just login.</p>
              
                <?php require './view/view.course.php';?>
            </div>
        </div>
    </main>
    <footer>
        <?php require "./view/partials/footer.php" ?>
    </footer>
</body>

</html>
