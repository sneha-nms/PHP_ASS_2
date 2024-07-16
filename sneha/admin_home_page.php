<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex flex-col">
    <header>
        <?php require "./view/partials/header.php" ?>
    </header>

    <main class="flex-grow flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-3xl">
            <h1 class="text-2xl font-bold mb-4 text-center">Welcome to the Admin Page</h1>
            <p class="mb-4 text-center">Hi, Admin </p>
            <div class="text-center">
                <a href="./view_users.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    View Post
                </a>
            </div>
        </div>
    </main>

    <footer>
        <?php require "./view/partials/footer.php" ?>
    </footer>
</body>

</html>
