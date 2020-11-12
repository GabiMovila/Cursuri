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
$password=$_POST['newpassword'];
$email=$_POST['email'];

$verificare = mysqli_query ($conn, "SELECT * FROM loginform WHERE User = '$uname'");
$verificare2 = mysqli_query ($conn, "SELECT * FROM loginform WHERE email = '$email'");


if(mysqli_num_rows($verificare) == 0 || mysqli_num_rows($verificare2) == 0)
{	
echo "Username and email don't match";
echo "<meta http-equiv=\"refresh\" content=\"5;url=http://localhost/cursuri/forgot.html\"/>";

}
else
{
	$sql = "UPDATE loginform SET Pass = '$password' where User = '$uname'";
	if ($conn->query($sql) === TRUE) {
    echo "Password updated successfully";
	echo "<meta http-equiv=\"refresh\" content=\"5;url=http://localhost/cursuri/index.php\"/>";
} 
else {
    echo "Error updating record: " . $conn->error;
}
}


mysqli_close($conn);
?>