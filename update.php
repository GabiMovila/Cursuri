<?php
 
include 'connection.php';
 error_reporting(0);
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $pass = $_POST['Pass'];
  $admin = $_POST['admin'];
  $ID = $_POST['ID'];
  $premium = $_POST['premium'];
  
  
  if(!$_POST['submit']){
	
  echo "All feilds must be filled";
  
}

else {

$sql = "UPDATE loginform
SET User='$name', email='$email', Pass = '$pass', admin = '$admin', premium = '$premium'
WHERE ID = '$ID'";


if (mysqli_query($conn, $sql)) {
    echo "<h1><center>Record Updated successfully</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

  
?>

<html>
<head>
<title>Update Data</title>

<style>
  body {
  background: #2d343d;
}

.login {
  margin: 20px auto;
  width: 300px;
  padding: 30px 25px;
  background: white;
  border: 1px solid #c4c4c4;
}

h1.login-title {
  margin: -28px -25px 25px;
  padding: 15px 25px;
  line-height: 30px;
  font-size: 25px;
  font-weight: 300;
  color: #ADADAD;
  text-align:center;
  background: #f7f7f7;
 
}

.login-input {
  width: 285px;
  height: 50px;
  margin-bottom: 25px;
  padding-left:10px;
  font-size: 15px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
  }
.login-button {
  width: 20%;
  height: 50px;
  padding: 0;
  font-size: 20px;
  color: #fff;
  text-align: center;
  background: #f0776c;
  border: 0;
  border-radius: 5px;
  cursor: pointer; 
  outline:0;
}

.login-lost
{
  text-align:center;
  margin-bottom:0px;
}

.login-lost a
{
  color:#666;
  text-decoration:none;
  font-size:13px;
}

.login-lost2
{
  text-align:center;
  margin-bottom:0px;
}

.login-lost2 a
{
  color:#0262fc;
  text-decoration:none;
  font-size:16px;
}


  </style>

</head>

<body>
   <center>
	<h2><font color="#43c103">Add Updates from this menu</h2></font>
		<form action="update.php" method="POST">
		
		<font color="#e0ff7a">	Input de ID you want updated:</br> <input type="text" name="ID" class = "login-input" value="" required><br><br>
			New Name:</br> <input type="text" name="Name" class = "login-input" value="" required><br><br>
			New Email:</br> <input type="email" name="Email" class = "login-input" value="" required><br><br>
			New Password:</br> <input type="text" name="Pass" class = "login-input" value="" required><br><br>
			Make admin(1 for yes, 0 for No): </br> <input type="text" name="admin" value="" required><br><br>
			Premium(1 for yes, 0 for No): </br> <input type="text" name="premium" value="" required><br><br>
	<br> </font>
			<input type="submit" class="login-button" name="submit" value="Update"/></center>
			
			<p class = "login-lost2"><a href="index.php">Login Page</a></p> </center> </form>
</body>


</html>