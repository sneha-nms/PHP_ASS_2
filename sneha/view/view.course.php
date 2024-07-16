<?php
session_start()
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://cdn.tailwindcss.com"></script>
    <Style>
        #editi_btn{
            background-color: green;
            color: white;
            border-radius: 5px;
            padding: 5px;
        }
        #del_btn{
            background-color: red;
            color: white;
            border-radius: 5px;
            padding: 5px;
        }
        p{

            text-align: center;
            color: red;
        }
        th{
            background-color:blue;
        }
    </Style>

</head>

<body class="bg-gray-100">
<header>
       
    </header>
    <div class="container mx-auto p-4">

    <div class="flex justify-between items-center mb-4">
            <p class="text-xl font-bold">All Posts</p>
    </div>
        <div class="overflow-x-auto">
            <table class="table-auto w-full border">
                <thead>
                    <tr class="bg-purple-600 rounded">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">title</th>
                        <th class="px-4 py-2">Content</th>
                        <th class="px-4 py-2">Post_cont_char</th>
                        <th class="px-4 py-2">Catgeories_image</th>

                       
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require "./controller/view.controller.php";
                    $rowColor = 'bg-gray-100';
                    while ($user = mysqli_fetch_assoc($result)) :
                        ?>
                        <tr class="<?php echo $rowColor; ?>">
                            <td class="border px-4 py-2"><?php echo $user['id']; ?></td>
                            <td class="border px-4 py-2"><?php echo $user['name']; ?></td>
                            <td class="border px-4 py-2"><?php echo $user['description']; ?></td>
                            <td class="border px-4 py-2"><?php echo $user['price']; ?></td>
                            <td class="border px-4 py-2"><img src=<?php echo $user['image'];?>/></td>
                            
                            
                            
                        </tr>
                        <?php
                        // Toggle row color
                        $rowColor = ($rowColor == 'bg-gray-100') ? 'bg-white' : 'bg-gray-100';
                    endwhile;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

<?php
mysqli_close($conn);
?>
