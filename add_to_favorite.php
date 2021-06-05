<?php 
session_start();
$username = $_SESSION['username'];
$book_name = $_POST['book'];
$conn = mysqli_connect("localhost", "group4", "group4", "group4");

$query = "INSERT INTO `fav_books`(`username`, `book_name`) VALUES ('".$username."','".$book_name."')";

$result = mysqli_query($conn, $query);

?>