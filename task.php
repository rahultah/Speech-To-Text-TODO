<?php

session_start();

include "con.php";
include "err.php";
$name = $_SESSION['username'];
// mysqli_select_db($con,'task_intern');

$task = $_POST['cont'];
// $name = $_POST['sus'];
echo $task;
// echo $task;


$query = mysqli_query($con,"select uid from users where username = '$name'");
// echo $query;

$row = mysqli_fetch_row($query);
// echo $row;

$uid = $row[0];
$reg = "insert into tasks (uid,task_content) values ('$uid','$task')";
    mysqli_query($con,$reg);
    echo "'$name' ,The new task is added";
    header('location:index.php');

?>