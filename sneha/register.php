<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="">
    <header>
        <?php require "./view/partials/header.php" ?>
    </header>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Create Post</h1>
        <form method="post" action="edit_user.php" class="bg-white p-6 rounded shadow-md">
            
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Title:</label>
                <input type="text" id="name" name="name" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Content:</label>
                <input type="text" id="email" name="email"  required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
          
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">price:</label>
                <input type="number" id="email" name="price"  required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="course">
                    Catgeories
                </label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="course" name="course" required>
                    <option value="Tchology">Tchology</option>
                    <option value="education">education</option>
                    <option value="lifestyle">JlifestyleS</option>
                    <option value="health">health</option>
                </select>
            </div>
            <div class="mb-4">
            <label for="img">Select image:</label>
            <input type="file" id="img" name="image" accept="image/*">
            </div>
             
            <div class="flex items-center justify-between">
                <input type="submit" value="Update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            </div>
        </form>
    </div>
</body>

</html>