<?php
$servername = "localhost";
$database = "to_doapp_db";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM task";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "name" . $row["nameT"]. " done: " . $row["done"]."<br>";
    }
  } else {
    echo "0 results";
  }


?>