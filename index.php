<html lang="en" class="dark">
<head>
    <title>File Explorer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="h-full flex justify-center items-center">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 border" action="explore.php" method="get">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="path">Enter path:</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="path" id="path" value="<?php echo __DIR__?>"/>
        </div>
        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Explore" />
    </form>
</div>
</body>
</html>
