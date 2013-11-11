<?php
	header('HTTP/1.1 503 Service Temporarily Unavailable');
	header('Status: 503 Service Temporarily Unavailable');
	header('Retry-After: 3600'); // 1 hour = 3600 seconds
	mail("kris@kristoferselbekk.com", "Database Error", "There is a problem with the database at Rosenborggata12.no!", "From: Rosenborggata12 bot");

?>
<!DOCTYPE HTML>
<html dir="ltr" lang="en-US">
	<head>
		<title>Oj, noe gikk skikkelig galt</title>
	</head>
	<body>
		<h1>Oj, noe gikk skikkelig galt</h1>
		<p>Det ser ut som vi ikke får tak i databasen til websiden vår. Mest sannsynlig er dette noe som går over av seg selv.</p>
		<p>Prøv igjen om noen minutter. Fortsetter feilen, send en mail til styret på <a href="mailto:rosenborggata12@googlegroups.com">rosenborggata12@googlegroups.com</a>.</p>
	</body>
</html>