<?php

session_start();


$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'responsiveform3');


$roll=$_POST['RollNo'];
$pur=$_POST['Purpose'];


$s="select * from add_student where RollNo='$roll'";

$result =mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
    $reg=" insert into add_stu(RollNo, Purpose) values('$roll','$pur')";
    mysqli_query($con,$reg);
    echo" Permission registered successfully";
    header('location: check_permission.html');
    
}
else{
    echo" Student doesn't exsits. First Add the Student";
}
?>