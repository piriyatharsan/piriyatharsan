<html>
<head>
<title>Car Seller Form</title>
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

<div class="regform"><h1>Car Seller Form</h1></div>

<form method ="post" action="" enctype="multipart/form-data">

<label>barnd</label>
<input type="text" name="barnd" placeholder="brand" required> <br><br>
<label>model</label>
<input type="text" name="modal" placeholder="model" required><br><br>
<label>condition</label>
<input type="text" name="condition" placeholder="condition" required><br><br>
<label>price</label>
<input type="text" name="price" placeholder="price"  required><br><br>
<label>description</label>
<input type="text" name="description," placeholder="description"  required><br><br>
<label>image</label>
 <input type="file" name="image" id="image"/>
<button type="submit" name="upload" value="upload Image/Data">upload</button>
</form>
</body>
</html>
           
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'account');

if(isset($_POST['upload']))
{
$brand = $_POST['brand'];
$model = $_POST['model'];
$condition = $_POST['condition'];
$price = $_POST['price'];
$description = $_POST['description'];
$file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

$query = "INSERT INTO 'users'('barand','model','condition','price','description','image') VALUES ('$brand','$model','$condition','$price','$description','$file')";
$query_run = mysqli_query($connection,$query);

if($query_run)
{
	echo '<script type ="text/javascript">alert("image profile uploaded)</script>';

}
else
{
	echo '<script type ="text/javascript">alert("image profile not uploaded)</script>';
}

}

?>
         