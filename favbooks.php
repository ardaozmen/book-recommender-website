<?php 
session_start();
$username = $_SESSION['username'];
$conn = mysqli_connect("localhost", "group4", "group4", "group4");
$query = "SELECT `book_name` FROM `fav_books` WHERE `username`='".$username."'";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles2.css">
    <title>Document</title>
</head>
<body>

<div class="topnav">

        <div class="topnav_left">
            <a class="active" href="home.php">Home</a>
            <a href="books.php">Books</a>
            <a href="contact.php">Contact</a>
            <a href="aboutus.php">About</a>
        </div>  

        <div class="topnav_right">
        <?php if(isset($_SESSION['username'])){
                echo '<a class="sign_up__item" href="profile.php">Profile</a>';
                echo '<a class="sign_up__item" href="logout_action.php">Logout</a>';
            } else{    
                echo '<a class="sign_up__item" href="sign_up.php">Sign Up</a>';
                echo '<a class="sign_in__item" href="sign_in.php">Sign In</a>';
            }?>
        </div>
    </div>

    <h1> Fav books </h1>
    <div class="row">

    <?php 
    while($row = mysqli_fetch_array($result)){
        echo '<div class="booklist">
        <div align="center"> <img class="bookpic" src= "image/book.png"/> </div> <div align="center">
        <h6> '.$row['book_name'].' </h6></div>
        </div>';
    }
    
    ?>

    </div>

    
</div>
</body>
</html>