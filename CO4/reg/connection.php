<?php 


$con=mysqli_connect('localhost','root','','db_registration') or die("connection failed : ".mysqli_connect_error());

if ($con) {
	 echo "Connection Successful";
}
else{
	echo "Error in connection";
}
 

?>