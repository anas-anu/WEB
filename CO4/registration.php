<?php
    echo "<b><u><font size=4><u>REGISTRATION FORM</u></font></u></b><br><br>";
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $addr=$_POST['addr'];
    echo "NAME: $fname $lname<br>"; echo "AGE: $age<br>";
    echo "ADDRESS: $addr<br>";
    $r=$_POST['radio']; 
    if($r=="male")
    echo "GENDER: Male<br>";
    else
    echo "GENDER: Female<br>";
    echo"LANGUAGES KNOWN: ";
    echo "<br>";
    foreach($_POST['chk'] as $selected)
    {
        echo $selected."<br>";
    }
?>