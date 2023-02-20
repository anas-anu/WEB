<html>
<head>
<style>
    h1
    {
        color:red;
    }
    span
    {
        color:red;
    }
    body
    {
        background:yellow;
    }
    #bt
    {
        color:white;
        background-color:green;
        border:None;
    }
</style></head>
<body>
<center><b><h1><u>REGISTRATION FORM</u></h1></b></center>
<?php
$fnameErr = $lnameErr = $pswderr = $ageErr = $ErrMsgf = $ErrMsgl = $ErrAge = "";
$fname = $lname = $pswd = $age = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["fname"]))
    {  
        $fnameErr = "* First Name is required";
    } 
    else 
    {  
        $fname=test_input($_POST["fname"]);
        $f="Valid";
    }  

    if (empty($_POST["lname"]))
    {  
        $lnameErr = "* Last Name is required";
    } 
    else 
    {  
        $lname=test_input($_POST["lname"]); 
        $l="Valid";
    }  

    if (empty($_POST["pwd"]))
    {  
        $pswderr= "* Password is required";
    } 
    else 
    {  
        $pswd=test_input($_POST["pwd"]); 
        $p="Valid";
    }  
    
    if (!preg_match ("/^[a-zA-z]*$/",$_POST ["fname"])) 
    {  
        $ErrMsgf = "* Only Alphabets and whitespace are allowed";    
    }   
    else 
    {  
        $fname=test_input($_POST["fname"]);
        $f="Valid";
    }

    if (!preg_match ("/^[a-zA-z]*$/",$_POST ["lname"])) 
    {  
        $ErrMsgl = "* Only Alphabets and whitespace are allowed";    
    }   
    else 
    {  
        $lname=test_input($_POST["lname"]);
        $l="Valid";
    }

    if (!preg_match ("/^[0-9]*$/", $_POST["age"])) 
    {  
        $ErrAge="* age is Only Natural Numbers";  
    }   
    else 
    {  
        $age=test_input($_POST["age"]);  
        $a="Valid";
    }

    if (empty($_POST["age"]))
    {  
        $ageErr= "* Age is required";
    } 
    else 
    {  
        $age=test_input($_POST["age"]); 
        $a="Valid";
    }  

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST["bt"]))
        {
            header("Location : registration.php");
        }
    }
}
function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<center>
<table cellspacing="10" cellpadding="10">
<tr>
    <td>FIRST NAME:</td>
    <td><input type="text" name="fname">
    <span class = "error"><?php echo $fnameErr;?></span>
    <span class = "error"><?php echo $ErrMsgf;?></span></td>
</tr>
<tr>
	<td>LAST NAME:</td>
    <td><input type="text" name="lname">
    <span class = "error"><?php echo $lnameErr;?></span>
    <span class = "error"><?php echo $ErrMsgl;?></span></td>
</tr>
<tr>	
    <td>PASSWORD:</td>
    <td><input type="password" name="pwd">
    <span class = "error"><?php echo $pswderr;?></span>
    </td>
</tr>
<tr>
    <td>AGE:</td>
    <td><input type="text" name="age">
    <span class = "error"><?php echo $ageErr;?></span>
    <span class = "error"><?php echo $ErrAge;?></span></td>
</tr>
<tr>
    <td>ADDRESS:</td>
    <td><input type="text" name="addr"></td>
</tr>
<tr>
    <td>GENDER:</td>
    <td><input type="radio" name="radio" value="male">Male
    <input type="radio" name="radio" value="female">Female</td>
</tr>
<tr>
    <td>LANGUAGES KNOWN:</td>
    <td><input type="checkbox" name="chk[]" value="PHP">PHP
    <input type="checkbox" name="chk[]" value="C">C
    <input type="checkbox" name="chk[]" value="CPP">CPP
    <input type="checkbox" name="chk[]" value="JAVA">JAVA</td>
</tr>
<tr>
    <td colspan="5" align="center"><input type="submit" value="Register" id="bt" name="bt"></td>
</tr>
</table>
</center>
</form>
</body>
</html>


