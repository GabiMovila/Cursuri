<html>
<head>
<title>Admin Panel </title>
<link rel="stylesheet" type="text/css" href="style/style_admin.css">

 <style type="text/css">
 .spoilerbutton {display:block; border:none; padding: 0px 0px; margin:10px 0px; font-size:150%; font-weight: bold; color:#000000; background-color:transparent; outline:0; 
 }
 .spoiler {overflow:hidden;}
 .spoiler > div {-webkit-transition: all 0s ease;-moz-transition: margin 0s ease;-o-transition: all 0s ease;transition: margin 0s ease;}
 .spoilerbutton[value="Show Users"] + .spoiler > div {margin-top:-500%;}
 .spoilerbutton[value="Hide UsersUsers"] + .spoiler {padding:5px;} 
 </style> 
</head>



<body>



<div id="header">
<center><img src="style/admin_icon.png">
<h3> Welcome to Admin Panel </h3></center>
</div>

<div id="sidemenu">
 <ul>
    <li><a href="add.php" target="_blank"> Add User </a></li>
	<li><a href="delete.php" target="_blank"> Delete </a></li>
	<li><a href="update.php" target="_blank"> Update Users Info </a></li>
	<li><a href="Index.php" target="_blank"> Log Out </a></li>
	<li><a href="1.html" target="_blank"> Front Page </a></li>
 </ul>	
</div>

<div id="data">
<br><br>

<center><h1><font color="#e0f731">Current users</font></h1></center>

<center>
<input class="spoilerbutton" type="button" value="Show Users" onclick="this.value=this.value=='Show Users'?'Hide Users':'Show Users';">
 <div class="spoiler"><div>
 <p>  </p>
 <p>  </p>
 
 
 
 
<?php
    include 'connection.php';
	
	//add error_reporting(0); to remove errors 
	
	
	$sql = "SELECT * FROM loginform";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
    echo "<h4>ID: </h4>" . $row["ID"]. "<br>" . "  Name: " . $row["User"].  " <br> " .  "Email: " . $row["email"] .  "<br>" . "Password: " . $row["Pass"].   "<br>" . "Admin: " . $row["admin"]. "<br>" . "Premium: " . $row["premium"]. "<br><br><br>";
	 }
} else {
    echo "<h3><center>No user data found!<center></h3>";
}
?>
</center>
</div> 
</div>
</body>
</html>