<?php
ob_start();



session_start();
include "con.php";


// echo "Connected successfully";
// mysqli_select_db($con,'id16885309_task_intern');
$name = $_POST['name'];
$pass = $_POST['password'];
// echo $pass;

$s = "select * from users where username = '$name' && password = '$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
// echo $num;
if($num == 1)
{
   $_SESSION['username'] = $name;
   $_SESSION['name'] = $name;
   header('location:index.php');
}
else
{
   echo "Incorrect pass";
}

?>