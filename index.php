</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All Projects</title>
	<link type="text/css" rel="stylesheet" href="bootstrap.css">
	<style type="text/css" media="screen">
		body {
		background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
		background-size: 400% 400%;
		animation: gradient 15s ease infinite;
		height: 100vh;
	}
	@keyframes gradient {
		0% {
			background-position: 0% 50%;
		}
		50% {
			background-position: 100% 50%;
		}
		100% {
			background-position: 0% 50%;
		}
	}
	</style>
</head>
<body>
	<div class="container-fluid">
		<h1 class="mt-3 text-white">Project List</h1>
		<hr>
		<div class="row">
			<?php
			function scan_dir($dir_lm)
			{
			$ignored = array('.', '..', '.svn', '.htaccess');
			$files = array();
			foreach (scandir($dir_lm) as $file) {
			if (in_array($file, $ignored)) continue;
			$files[$file] = filemtime($dir_lm . '/' . $file);
			}
			ksort($files);
			$files = array_keys($files);
			return ($files) ? $files : false;
			}
			$dir = scan_dir(getcwd());
			?>
			<?php foreach ($dir as $key=>$file) : ?>
			<?php if ($file != "." && $file != ".." && $file != "index.php" && $file != "bootstrap.css" ) : ?>
			<div class="col-md-2 mt-2 mb-2">
				<div class="card  border border-secondaeay rounded-lg 	">
					<div class="card-body">
						<a class="text-dark" href="<?php echo $file; ?>"><b><?php echo $key+1 . " . " . $file; ?></b></a>
					</div>
				</div>
			</div>
			<?php endif;
			?>
			<?php endforeach; ?>
		</div>
	</div>
</body>
</html>
