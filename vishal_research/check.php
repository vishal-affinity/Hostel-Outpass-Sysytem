<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'responsiveform3');



$roll=$_POST['RollNo'];


$s="select * from add_stu where RollNo='$roll'";

$result =mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
    header('location: permission_Granted.html');
}
else{
    echo" permission not granted";
}
?>
