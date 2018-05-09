<!DOCTYPE html>
<head>
	<title>Helpdesk</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

<h1>View Records</h1>

<a href="index.php">Home</a> 
<a href="view.php">View All Records</a> 
<a href="find.php">Find a Customer</a>
<a href="insert.php">Insert a Record</a>
<a href="update.php">Update a Record</a>
<a href="delete.php">Delete a Record</a> 

<?php
	try {
	require 'inc-db-connect.php';
	
	$customer_name = $_POST["customer_name"];
	
	$deleteQuery = "DELETE FROM customer WHERE customer_name='$customer_name'";
	$delete_count = $db->exec($deleteQuery);
	} catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
	
<h2>Delete Customer(s) in the Database</h2>

<h3>The record: <?php echo $customer_name ?> was deleted </h3>

<p>Delete Count: <?php echo $delete_count; ?></p>
</body>
</html>