
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'suudent_db');

if(isset($_POST['upload']))
{
	$brand = $_POST['brand'];
	$model = $_POST['modal'];
	$condition = $_POST['condition'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$file = addslashes(file_get_contents($_FILE["image"]["tmp_name"]));
    
	$query = "INSERT INTO 'car_register'('brand','model','condition','price','description','image') VALUES ('$barnd','$model','$condition','$price','$description','$file')";
	$query_run = mysql_query($connection,$query);
 }
?>