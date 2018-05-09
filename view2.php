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
	require 'inc-db-connect.php';
	
	// queries to get data from database
	$customer_query = "SELECT * FROM customer";
	$customers = $db->query($customer_query);
	
	$calls_query = "SELECT * FROM calls";
	$calls = $db->query($calls_query);
	
	$category_query = "SELECT * FROM category";
	$categories = $db->query($category_query);
	
	$technician_query = "SELECT * FROM technician";
	$technicians = $db->query($technician_query);
	
	$callDetail_query = "SELECT * FROM call_technicians_details";
	$callDetails = $db->query($callDetail_query);
?>
	
<h2>Customers in the Database</h2>

<?php foreach($customers as $customer) : ?>

<table id="customers">
	<tr>
		<th>Customer ID</th>
		<th>Customer Name</th>
		<th>Address</th>
		<th>City</th>
		<th>State</th>
		<th>Zip</th>
		<th>Phone</th>
	</tr>
	<tr>
		<td><?php echo $customer['cust_id']; ?></td>
		<td class="text"><?php echo $customer['cust_name']; ?></td>
		<td class="longText"><?php echo $customer['address']; ?></td>
		<td class="text"><?php echo $customer['city']; ?></td>
		<td><?php echo $customer['state']; ?></td>
		<td><?php echo $customer['zip']; ?></td>
		<td><?php echo $customer['phone']; ?></td>
	</tr>
</table>
<?php endforeach; ?>

<h2>Calls in the Database</h2>

<?php foreach($calls as $call) : ?>

<table id="calls">
	<tr>
		<th>Call ID</th>
		<th>Call Date</th>
		<th>Call Time</th>
		<th>Problem</th>
		<th>Customer ID</th>
		<th>Category ID</th>
	</tr>
	<tr>
		<td><?php echo $call['call_id']; ?></td>
		<td class="text"><?php echo $call['call_date']; ?></td>
		<td class="text"><?php echo $call['call_time']; ?></td>
		<td class="comments"><?php echo $call['problem']; ?></td>
		<td><?php echo $call['customer_id']; ?></td>
		<td><?php echo $call['category_id']; ?></td>
	</tr>
</table>
<?php endforeach; ?>

<h2>Categories in the Database</h2>

<?php foreach($categories as $category) : ?>

<table id="calls">
	<tr>
		<th>Category ID</th>
		<th>Category Description</th>
	</tr>
	<tr>
		<td><?php echo $category['category_id']; ?></td>
		<td class="longText"><?php echo $category['cat_description']; ?></td>
		
	</tr>
</table>
<?php endforeach; ?>

<h2>Technicians in the Database</h2>

<?php foreach($technicians as $technician) : ?>

<table id="calls">
	<tr>
		<th>Tech ID</th>
		<th>Technician Name</th>
		<th>Phone</th>
		<th>Email</th>
	</tr>
	<tr>
		<td><?php echo $technician['tech_id']; ?></td>
		<td class="text"><?php echo $technician['tech_name']; ?></td>
		<td><?php echo $technician['phone']; ?></td>
		<td class="longText"><?php echo $technician['email']; ?></td>
	</tr>
</table>
<?php endforeach; ?>

<h2>Call-Technician Details in the Database</h2>

<?php foreach($callDetails as $callDetail) : ?>

<table id="callDetails">
	<tr>
		<th>Call ID</th>
		<th>Tech ID</th>
		<th>Comments</th>
		<th>Resolved (Y/N)</th>
		<th>Resolved Date</th>
	</tr>
	<tr>
		<td><?php echo $callDetail['call_id']; ?></td>
		<td><?php echo $callDetail['tech_id']; ?></td>
		<td class="comments"><?php echo $callDetail['comments']; ?></td>
		<td><?php echo $callDetail['resolved']; ?></td>
		<td class="longText"><?php echo $callDetail['resolved_date']; ?></td>
	</tr>
</table>
<?php endforeach; ?>

</body>
</html>