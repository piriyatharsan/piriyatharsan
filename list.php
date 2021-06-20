<html>
<?php include 'menu.php';   ?>

<body>
    <?php
	require("db.php");

    $sql = "SELECT stdid, firstname,lastname,email,password FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["email"]. "<br>";

   echo "<div>";
			echo "<h1> ".$row["stdid"] ."</h1>";
			echo "<p> ".$row["firstname"] ."</p>";
			echo "<p> ".$row["lastname"] ."</p>";
			echo "<p>".$row["email"]."</p>";
			echo "<p> ".$row["password"] ."</p>";
			
			//echo "<img src='uploads/car_images/".$row["image"]."'/>";
			
			//echo "<h3>Rs. " .$row["price"] ."</h3>";
			echo "</div>";

  }
} else {
  echo "0 results";
}
$conn->close();
    ?>
</body>

</html>