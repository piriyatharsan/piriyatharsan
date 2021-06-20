<?php
//To start session
		if(!isset($_SESSION)){
				session_start();
		}
        

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "studentdb";

// Create connection
$conn = new mysqli($servername, $username, $pass , $dbname);
        
$email = $_POST["email"];
$password = $_POST["password"];


$sql = "SELECT * FROM register WHERE email='$email' AND password='$password' ";
$result = $conn->query($sql);

/*if ($result->num_rows > 0) {
 echo "LOGIN SUCCESSS !!!";
  
  }
else {
 echo "LOGIN FAILED";
}
*/


?>