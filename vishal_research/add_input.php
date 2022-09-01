<?php

session_start();


$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'responsiveform3');



$name=$_POST['Name'];
$roll=$_POST['RollNo'];
$email=$_POST['Email'];
$mob=$_POST['MobileNo'];


$s="select * from add_student where RollNo='$roll'";

$result =mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
    echo" Student with this roll number already exsits";
}
else{
    $reg=" insert into add_student(Name, RollNo, Email, MobileNo) values('$name','$roll','$email','$mob')";
    mysqli_query($con,$reg);
    echo" Student Added Succesful";
    header('location: permission.html');
}
?>