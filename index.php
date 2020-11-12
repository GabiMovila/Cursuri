<!DOCTYPE HTML>

<html>

<head>
  <title>Login</title>
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
  width: 100%;
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
			<form method="POST" action = "create.php" class = "login">
			<form method="POST" action = "1.html" class = "login">
			<div class="form-input">
				<input type="text" class="login-input"  name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" class="login-input" name="password" placeholder="Enter the Password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="login-button"/>
		</form>
		</form>
		
		<p class ="login-lost2"> <a href = "register.html">Create account</a>
		</p>
		
		<p class = "login-lost"><a href="forgot.html">Forgot Password?</a></p>
		</p>
		
	


</body>
</html>


