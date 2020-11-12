<?php
$servername = "localhost";
$user = "root";
$password = "";
$db = "cursuri";

// Create connection
$conn = mysqli_connect($servername,$user,$password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$uname=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
	
$sql = "INSERT INTO loginform (User, Pass,email)
VALUES ('$uname', '$password','$email')";

if (mysqli_query($conn, $sql)) {
	header("Location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>