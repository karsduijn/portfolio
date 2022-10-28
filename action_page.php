<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contacts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO `contacts` (`fname`, `lname`, `email`, `fnumber`) VALUES ('$fname', '$lname', '$email', '$phone')";
$result = $conn->query($sql);
?>