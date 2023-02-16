<?php
ob_start();
session_start();
?>
<html>
<head>
<title>Login</title>
</head>
<body>
<center>
<h1><b><u>LOGIN</u></b></h1>
<form name="form" id="form1" method="get">
<table>
<tr>
<td>UserName</td>
<td><input name="txt1" type="text" id="txt1" /></td>
</tr>
<tr>
<td>Password</td>
<td><input name="txt2" type="password" id="txt2" /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="Submit" value="Login"
/></td>
</tr>
</table>
</form>
</body>
<?php
if(isset($_GET['Submit']))
{
$t1=$_GET['txt1'];
$t2=$_GET['txt2'];
$con=new mysqli('localhost','root','','login');
$query="select uname,password from login where uname='$t1' and password='$t2'";
$result=$con->query($query);
if($rw=$result->fetch_row())
{
$_SESSION["username"]=$rw[0];
header("location:session2.php");
}
else
{
echo "Invalid";
include_once "session1.php";
}
}
?>
</html>
<?php
session_start();
?>
<html>
<head>
<title>New</title>
</head>
<body>
<form name="form1" id="form1" method="get">
</form>
</body>
<?php
$name=$_SESSION['username'];
echo "WELCOME ".$name;
?>. Click here to <a href="session1.php" title="Logout">Logout. 
</html>