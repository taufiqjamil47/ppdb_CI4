<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex">

	<title>Server Off</title>

	<style type="text/css">
		<?= preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'debug.css')) ?>
	</style>
</head>

<body>

	<div class="container text-center">
		<h1 class="headline">Server sedang dalam kondisi mati!</h1>
		<p class="lead">Harap hubungi admin...</p>
	</div>

</body>

</html>