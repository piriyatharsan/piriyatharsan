<html>
<head>
<title>Login From</title>
<style>
body{
	margin:0;
	padding:0;
	background-image:url("./image/back.jpg");
	background-size:cover
    }
.container{
	top:50%;
	left:50%;
	position:absolute;
	transform:translate(-50%,-50%);
}
.card{
	padding:60px 40px 50px 40px;
	background:rgb(50,50,50);
	border-radius:10px;
	
}
#A{
	border:none;
	background:transparent;
	border-bottom:1px solid white;
	padding:10px;
	margin-bottom:15px;
	width:200px;
	color:white;
}
button{
	padding:10px 20px;
	border-radius:20px;
	background:dodgerblue;
	color:white;
	margin-top:20px;
	border:none;
	outline:none;
	margin-left:50px;
}
button:hover{
	background-color:greenyellow;
	color:black;
	cursor:pointer;
}
a{
	font-size:15px;
	text-decoration:none;
}
img{
	border-radius50%;
	position:acos;
	margin-left:100px;
	margin-top:-40px;
}

</style>
<body>
<div class="container">
<img src="image/user.png" height="70" width="70">
<div class="card">
<form action="log_action.php" method="POST">
<input type="text" name="email" placeholder="Email" id="A"><br><br>
<input type="password" name="password" placeholder="Password" id="A"><br><br>
Don't have an account?
<a href="registration.php">Registration</a><br>
<a href="sellcar.php"><button >submit</button></a>

</div>
</div>

</form>
</body>
</html>
</head>
