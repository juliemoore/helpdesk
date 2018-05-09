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
	
	$customer_name = $_POST['customer_name'];
	$updateCustomer_name = $_POST['updateCustomer_name'];
	
	// queries to get data from database
	$customerQuery = "UPDATE customer SET customer_name='$updateCustomer_name'
					WHERE customer_name='$customer_name'";
					
	// use the exec method of the PDO object for INSERT, Update, Delete
	$update_count = $db->exec($customerQuery);
	} catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
	
<h2>Update Customers in the Database</h2>

<h3>The record: <?php echo $customer_name . ' was updated to ' . $updateCustomer_name; ?> </h3>

<p>Update Count: <?php echo $update_count; ?> </p>

</body>
</html>