<?Php
require("db.php");
?>
<?php
$sql="INSERT INTO register(firstname,lastname,email,password) values('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]')";

if($conn->query($sql)===TRUE){
	echo "new record created";
}
else{
	echo "error";
}
	


?>