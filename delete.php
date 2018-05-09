<!DOCTYPE html>
<head>
	<title>Helpdesk</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

<h1>Delete a Customer Record</h1>

<a href="index.php">Home</a> 
<a href="view.php">View All Records</a> 
<a href="find.php">Find a Customer</a>
<a href="insert.php">Insert a Record</a>
<a href="update.php">Update a Record</a>
<a href="delete.php">Delete a Record</a> 
	
<h2>Delete a Customer</h2>

<form name="customer" method="post" action="delete-customer.php">
		<label for="customer_name">Customer Name:</label>
		<input type="text" name="customer_name" />
		
		<input type="submit" id="find" value="Submit" />
	</form>

</body>
</html>