

<?php 

include ('connection.php');

$id = $_GET['id'];
$sql ="DELETE FROM registration WHERE id='$id'";

$data = mysqli_query($con,$sql);

if ($data) 

{
	
	header('location:show.php');
	echo ("Deleted records successfully!");
}
else
{
	echo "Error in deleting records";
}

 ?>
delete.php
Displaying delete.php.