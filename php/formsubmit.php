<?php 
$servername = "localhost";
$username = "root";
$password = "sqlroot";
$dbname = "doberman";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$fname = $_GET["fname"];
$lname = $_GET["lname"];
$email = $_GET["email"];
$rad = $_GET["rad"];
$checkjawn = $_GET["checkjawn"];

$sql = "INSERT INTO userinfo (fname, lname, email, rating, TOS) 
        VALUES ('$fname','$lname','$email','$rad','$checkjawn')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>

