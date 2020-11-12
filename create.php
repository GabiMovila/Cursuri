<?php

$host="localhost";
$user="root";
$password="";
$db="cursuri";
 
$conn = mysqli_connect($host,$user,$password, $db);
 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where User='".$uname."'AND Pass='".$password."' limit 1";
    $adm="select User from loginform where admin=1"; // Verifica daca e admin
	
	 $premium="select User from loginform where premium=1";
	
    $result=mysqli_query($conn, $sql);
	$result2=mysqli_query($conn, $adm);
	
	$result3=mysqli_query($conn, $premium);

	
   
   if(mysqli_num_rows($result)==1){
		
			while($row = mysqli_fetch_assoc($result2))
			{
			
			if($row["User"]==$uname)
				{ 		
			header("Location:admin_panel.php");
			exit();
				}				
			}
			
			while($row = mysqli_fetch_assoc($result3))
			{
			
			if($row["User"]==$uname)
				{ 		
			header("Location:2.php");
			exit();
				}				
			}
	
	
		header("Location:1.html");
        exit();
    }
    else{
		header("Location:loginfail.html");
        exit();
    }
	
	
       
} 
 ?>