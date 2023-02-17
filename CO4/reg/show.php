

<html>
<head>
	<title>show table</title>
</head>
<body>
<?php 

include ('connection.php');
$sql ="select * from registration";
$data =mysqli_query($con,$sql);
$total=mysqli_num_rows($data);


if ($total=mysqli_num_rows($data)) {
	?>
	<table border="2">
<tr>
<th>Id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Phone Number</th>
<th>Address</th>
<th>Delete</th>
<th>Update</th>
</tr>

	<?php
	
	while ($result = mysqli_fetch_array($data)) {

		echo " 
			<tr>
				<td>".$result['id']."</td>
				<td>".$result['firstname']."</td>
				<td>".$result['lastname']."</td>
				<td>".$result['email']."</td>
				<td>".$result['phonenumber']."</td>
				<td>".$result['address']."</td>
				<td><a href='update.php?id=$result[id] & firstname=$result[firstname] & lastname=$result[lastname] & email=$result[email] & phonenumber=$result[phonenumber] &address=$result[address]'> update </a></td>
				<td><a href='delete.php?id=$result[id] '>delete </a></td>
			</tr>
		";
	}
}
else
{
 	echo "No Records found";
}

?>
</table>
</body>
</html>	
 
show.php
Displaying show.php.