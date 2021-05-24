

<!-- FOR WEBHOST -->
<?php


// session_start();
// $con = mysqli_connect('localhost','root','root');
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = new mysqli($servername, $username, $password);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db($con,'task_intern');


?>