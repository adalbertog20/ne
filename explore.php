<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Explorer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex justify-center items-center flex-col border h-screen">

	<?php
		if ([$_GET['path']] !== null) {
			$path = $_GET['path'];
			if (is_dir($path)) {
				$files = scandir($path);
				foreach ($files as $file) {
					$file_path = $path . DIRECTORY_SEPARATOR . $file;
					if (is_dir($file_path)) {
						echo "<a class='font-extrabold text-xl' style='color: darkBlue' href='explore.php?path=$file_path'>" . $file . "</a><br>";
					} else {
						echo '<span class="text-xl">' . $file . '</span>' . '<br>';
					}
				}
			}
		}
	?>
</div>
</body>
</html>
