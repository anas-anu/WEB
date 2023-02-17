
<html>
<head>
	<title>update</title>
</head>
<body>

<form action="" method="get">
	<input type="text" name="id" placeholder="id" value="<?php echo $_GET['id']; ?>"><br><br>
	<input type="text" name="firstname" placeholder="firstname" value="<?php echo $_GET['firstname']; ?>"><br><br>
	<input type="text" name="lastname" placeholder="lastname" value="<?php echo $_GET['lastname']; ?>" ><br><br>
	<input type="gmail" name="email" placeholder="gmail" value="<?php echo $_GET['email']; ?>"><br><br>
	<input type="text" name="phonenumber" placeholder="number" value="<?php echo $_GET['phonenumber']; ?>"><br><br>
	<input type="text" name="address" placeholder="address" value="<?php echo $_GET['address']; ?>"><br><br>
	<input type="submit" name="submit" value="update">
	
</form>

<?php 
error_reporting(0);
include ('connection.php');
if ($_GET['submit'])
{
	$id = $_GET['id'];
	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
	$email = $_GET['email'];
	$phonenumber = $_GET['phonenumber'];
	$address = $_GET['address'];

    echo($email);

 	$sql= "UPDATE registration SET firstname='$firstname',lastname='$lastname', email='$email', phonenumber='$phonenumber', address='$address'   WHERE id='$id'";
 	
 	$data=mysqli_query($con, $sql);
   	
 	if ($data) {
 		//echo "record update";
 		header('location:show.php');
 	}
 	else{
 		echo "No updates";
 	}
}
else
{
	echo "click on  button to save the change";
}
?>
</body>
</html>

