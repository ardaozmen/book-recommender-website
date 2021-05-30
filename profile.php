<?php 
session_start();
$username = $_SESSION['username'];
$conn = mysqli_connect("localhost", "group4", "group4", "group4");
$query = "SELECT * FROM profile WHERE username='".$username."'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles2.css">
    <title>Profile</title>

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

    <img class= "profilepic" src= "image\profilepic.png">
    <div class="info">
    <p class="personalinfo"> Name & Surname:  <?php echo $row['name_surname'] ?></p>
    <p class="personalinfo"> Age: <?php echo $row['age'] ?> <br> Gender: <?php echo $row['gender'] ?> <br> Country: <?php echo $row['country'] ?> <br> City: 
    <?php echo $row['city'] ?> </p>
    <br>
    <br>
    <p class="bio"><?php echo $row['bio'] ?> </p>
</div>
<div class= "profilemenu">
    <ul class= "horizontal">
        <li><a href="favbooks.php"> Fav books |</a></li>
        <li><a href="friends.php"> Friends |</a></li>
        <li><a href="messages.php"> messages |</a></li>
        <li><a href="notifications.php"> notifications |</a></li>
        <li><a href="editprofile.php"> edit profile </a></li>
    </ul>
    </div>
</body>
</html>