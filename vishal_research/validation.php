<?php

session_start();
header('location: login.php');

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'responsiveform3');



$email=$_POST['email'];
$pass=$_POST['password'];

$s="select * from login where email='$email' && password='$pass'";

$result =mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
    header('location: permission.html');
}
else{
    header('location:login.php');
}
?>