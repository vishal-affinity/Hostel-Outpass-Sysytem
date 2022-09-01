<?php

session_start();
header('location: login.php');

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'responsiveform3');



$email=$_POST['email'];
$pass=$_POST['password'];

$s="select * from login where email='$email'";

$result =mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
    echo" email id already registered";
}
else{
    $reg=" insert into login(email, password) values('$email','$pass')";
    mysqli_query($con,$reg);
    echo" Registration Succesful";
}
?>
