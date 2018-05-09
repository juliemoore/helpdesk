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
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$phone = $_POST['phone'];
	
	// queries to get data from database
	$insertQuery = "INSERT INTO customer (customer_name, address, city, state, zip, phone)
					VALUES('$customer_name', '$address', '$city', '$state', '$zip', '$phone')";
					
	// use the exec method of the PDO object for INSERT, Update, Delete
	$insert_count = $db->exec($insertQuery);
	} catch(PDOException $e) {
		echo $e->getMessage();
	}
	
?>
	
<h2>Insert Customers in the Database</h2>

<h3>The record: <?php echo $customer_name . ' ' . $address . ' ' . $city . ' ' . $state . ' ' . $zip . ' ' . $phone; ?> was added</h3>

<p>Insert Count: <?php echo $insert_count; ?> </p>

</body>
</html>