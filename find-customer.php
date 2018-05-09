<!DOCTYPE html>
<head>
	<title>Helpdesk</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

<h1>Customer Records</h1>

<a href="index.php">Home</a> 
<a href="view.php">View All Records</a> 
<a href="find.php">Find a Customer</a>
<a href="insert.php">Insert a Record</a>
<a href="update.php">Update a Record</a>
<a href="delete.php">Delete a Record</a> 

<?php
	try {
	require 'inc-db-connect.php';
	
	$name = $_POST['customer_name'];

	$customer_query = "SELECT * FROM customer WHERE customer_name='$name'";
	$customers = $db->query($customer_query);
	} catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
	
<h2>Customer in the Database</h2>

<table id="tbl_header">
	<tr>
		<th>Customer ID</th>
		<th class="text">Customer Name</th>
		<th class="longText">Address</th>
		<th class="text">City</th>
		<th>State</th>
		<th>Zip</th>
		<th>Phone</th>
	</tr>
</table>

<?php foreach($customers as $customer) : ?>

<table id="customers">
	<tr>
		<td><?php echo $customer['customer_id']; ?></td>
		<td class="text"><?php echo $customer['customer_name']; ?></td>
		<td class="longText"><?php echo $customer['address']; ?></td>
		<td class="text"><?php echo $customer['city']; ?></td>
		<td><?php echo $customer['state']; ?></td>
		<td><?php echo $customer['zip']; ?></td>
		<td><?php echo $customer['phone']; ?></td>
	</tr>
</table>

<?php endforeach; ?>

</body>
</html>