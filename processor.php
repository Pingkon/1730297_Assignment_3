<?php

$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$conn = mysqli_connect("localhost", "root", "", "contact_form") or die("connection failed");

$sql = "INSERT INTO contact_table(first_name, last_name, email, subject, message) VALUES ('{$firstname}', '{$lastname}', '{$email}', '{$subject}', '{$message}')";

$result = mysqli_query($conn, $sql) or die("Query Failed");

header("location: contact.php");

mysqli_close($conn);

?>