<?php
	// variable to connect to the database
	$dsn = 'mysql:host=insweb.cccneb.edu;dbname=julie74779_helpdesk';
	$username = 'julie74779';
	$password = 'Winter2017!';
	
	// create new database object
	try {
		$db = new PDO($dsn, $username, $password);
	} catch (PDOException $e){
		$err_message = $e->getMessage();
		echo "<p>An error occurred while connecting to the database: $err_message</p>";
	}
?>