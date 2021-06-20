<html>
<head>
<title>registration_form</title>
<style>
input[type="text"]{
	width:100%;
	padding:12px 20px;
	margin:15px 0;
	border:1px solid #ccc;
	border-radius:4px;
	box-sizing: border-box;
}
button[type="submit"]{
	width:100%;
	background-color:#4caf50;
	color:#FFF;
	padding: 14px 20px;
	margin:8px 0;
	border:none;
	border-radius:4px;
	cursor:pointer;
	
	
}
button[type="submit"]:hover{
	background-color:#45a049;
}
</style>
</head>
<body>

<div class="regform"><h1>Registeration Form</h1></div>

<form method ="post" action="reg_action.php">

<label>First Name</label>
<input type="text" name="firstname" placeholder="Enter your firstname" required> <br><br>
<label>Last Name</label>
<input type="text" name="lastname" placeholder="Enter your lastname" required><br><br>
<label>Nic</label>
<input type="text" name="Nic" placeholder="Nic" required><br><br>
<label>City</label>
<input type="text" name="City" placeholder="city" required><br><br>
<label>Email</label>
<input type="text" name="email" placeholder="you@gamil.com" required><br><br>
<label>Password</label>
<input type="text" name="password" placeholder="Enter your password"  required><br><br>
<button type="submit" value="Register Me">Register Me</button>
</form>
</body>
</html>