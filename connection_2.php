<?php
$server ="localhost";
$username = "root";
$password = "";
$database="student_db";

//create connection
$conn=new mysqli($server,$username,$password,$database);
//check connection
if($conn ->connect_error){
	die("connection failed:". $conn->connect_error);
}
 echo "Connected Successfully";


  /* //Create Database
   $sql = "CREATE DATABASE studentdb";
   if($conn->query($sql) === TRUE){
	   echo "Database Connected Successfully";
   }else{
	   echo "Error creating database".$conn->error;
   }*/
   
   
 /*  //sql to create table
   $sql = "CREATE TABLE car_register( 
   brand VARCHAR(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   model VARCHAR(255) NOT NULL,
   condition VARCHAR(255) NOT NULL,
   price VARCHAR(255) NOT NULL,
   description VARCHAR(255) NOT NULL,
   
   req_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
   )";
   
   if($conn->query($sql) === TRUE){
	   echo "Table MyGuests created successfully";
   }
   else{
	   echo "Error createing table:". $conn->error;
    }
    */
    ?>
   