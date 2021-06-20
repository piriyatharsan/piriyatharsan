<?php
$server ="localhost";
$username = "root";
$password = "";
$database="studentdb";

//create connection
$conn=new mysqli($server,$username,$password,$database);
//check connection
if($conn ->connect_error){
	die("connection failed:". $conn->connect_error);
}
// echo "Connected Successfully";


   //Create Database
   $sql = "CREATE DATABASE studentdb";
   if($conn->query($sql) === TRUE){
	   echo "Database Connected Successfully";
   }else{
	   echo "Error creating database".$conn->error;
   }
   
   //sql to create table
   $sql = "CREATE TABLE register( 
   stdid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   firstname VARCHAR(30) NOT NULL,
   lastname VARCHAR(30) NOT NULL,
   password VARCHAR(50) NOT NULL,
   email VARCHAR(50),
   req_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
   )";
   
   if($conn->query($sql) === TRUE){
	   echo "Table MyGuests created successfully";
   }
   else{
	   echo "Error createing table:". $conn->error;
    }
   
   
?>