<?php 
session_start();
$conn = mysqli_connect("localhost", "group4", "group4", "group4");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles2.css">
    <title>About Us</title>

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
    <h1 style="margin-left: 100px; margin-right: 100px;">About Us</h1>
    <p style="margin-left: 100px; margin-right: 100px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor e et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


    <div class="container_" style="margin-left: 100px; margin-right: 100px;">
        <div class="class1">
            <form>
                <ul class="namelist">
                    <li>Bora</li>
                    <li>Arda</li>
                    <li>Can</li>
                    <li>Mohanned</li>
                    <li>Yuksel</li>
                </ul>
                <ul>
                    <li>email</li>
                    <li>email</li>
                    <li>email</li>
                    <li>email</li>
                    <li>email</li>
                </ul>
            </form>
        </div>
    </div>
</body>
</html>