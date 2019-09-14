<?php 

include 'conn.php';

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];




$sql = 	"INSERT INTO admin (firstname, lastname) VALUES ('$firstname','$lastname')";	

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>