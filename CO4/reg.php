<html>
<head><center><b><h1><u>REGISTRATION FORM</u></h1></b></center></head>
<body>
<form action="register.php" method="POST">
<center>
<table border="2" cellspacing="10" cellpadding="10">
<tr>
<td>First name:</td>
<td><input type="text" name="txt1"></td>
</tr>
<tr>
<td>Last name:</td>
<td><input type="text" name="txt2"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="pwd"></td>
</tr>
<tr>
<td>Age:</td>
<td><input type="text" name="txt3"></td>
</tr>
<tr>
<td>Address:</td>
<td><input type="text" name="txt4"></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="radio" name="rd" value="male">Male</td>
<td><input type="radio" name="rd" value="female">Female</td>
</tr>
<tr>
<td>Languages known:</td>
<td><input type="checkbox" name="chk[]" value="PHP">PHP</td>
<td><input type="checkbox" name="chk[]" value="C">C</td>
<td><input type="checkbox" name="chk[]" value="CPP">CPP</td>
<td><input type="checkbox" name="chk[]" value="JAVA">JAVA</td>
</tr>
<center><td rowspan="2"><input type="submit" name="submit" value="submit"></td></center>
</table>
</center>
</form>
</body>
</html>
<?php
echo "<b><u><font size=5>REGISTRATION FORM</font></u></b><br>";
$fname=$_POST['txt1'];
$lname=$_POST['txt2'];
$age=$_POST['txt3'];
$addr=$_POST['txt4'];
echo "Name: $fname $lname<br>";
echo "Age: $age<br>";
echo "Address:$addr<br>";
$r=$_POST['rd'];
if($r==male)
echo "Gender:Male<br>";
else
echo "Gender:Female<br>";
echo"Languages Known:<br>";
foreach($_POST['chk'] as $selected)
{
echo $selected."<br>";
}
?>