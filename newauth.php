<?php
ob_start();
// echo "working";
// include "header.php";
session_start();

include "con.php";
 
// echo "Connected successfully";
// mysqli_select_db($con,'id16885309_task_intern');
$name = $_POST['name'];
$pass = $_POST['password'];
// echo $pass;

$s = "select * from users where username = '$name'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
// echo $num;
if($num == 1)
{
    echo "username already taken";
}
else
{
    // echo "reg working";
    $reg = "insert into users (username,password) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo "'$name' is registered";
    header('location:login.php');
}

?>