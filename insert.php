<!DOCTYPE html>
<head>
	<title>Helpdesk</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

<h1>Insert a Customer Record</h1>

<a href="index.php">Home</a> 
<a href="view.php">View All Records</a> 
<a href="find.php">Find a Records</a>
<a href="insert.php">Insert a Record</a>
<a href="update.php">Update a Record</a>
<a href="delete.php">Delete a Record</a> 

<h2>Insert a Customer in the Database</h2>

<form name="customer" method="post" action="insert-customer.php">
		<label for="customer_name">Customer Name:</label>
		<input type="text" name="customer_name" /><br>
		<label for="address">Address:</label>
		<input type="text" name="address" /><br>
		<label for="city">City:</label>
		<input type="text" name="city" /><br>
		<label for="state">State:</label>
		<input type="text" name="state" /><br>
		<label for="zip">Zip:</label>
		<input type="text" name="zip" /><br>
		<label for="phone">Phone:</label>
		<input type="text" name="phone" /><br>		
		<input type="submit" value="Submit" />
</form>

</body>
</html>