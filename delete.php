<?php
 
include 'connection.php';
 error_reporting(0);
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $pass = $_POST['Pass'];
  
 
  
  
if(!$_POST['submit']){
	
	
  echo "All feilds must be filled";
  
}

else {

 
$sql = "DELETE FROM loginform where User = '$name'";

if (mysqli_query($conn, $sql)) {
    echo "<h1><center>Record deleted succesfully </center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

<html>
<head>
<title>DELETE DATA</title>
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
	<h2><font color="#e0ff7a">Input the user you want to delete</h2></font>
		<form action="delete.php" method="POST">
		
		 <input type="text" class = "login-input" name="Name" value="" required><br><br>
	<br>
			<input type="submit" class="login-button" name="submit" value="DELETE"/></center>
			
			
			<p class = "login-lost2"><a href="index.php">Login Page</a></p>
			</center></form>
</body>


</html>