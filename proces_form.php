<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];




$conn = mysqli_connect("localhost","root","","simple_form");
$insert = mysqli_query ($conn, "INSERT INTO regstrtn VALUES(null,'$name','$email','$message')");

echo "well done " ;
?>