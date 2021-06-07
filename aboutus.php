<?php 
// connect to database
session_start();
$conn = mysqli_connect("localhost", "group4", "group4", "group4");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Booklet | About Us</title>

</head>
<body>
    <div class="topnav">
        <div class="topnav_left">
            <img class="logo" src="img/booklet.png" alt="booklet">
            <a class="active" href="home.php">Home</a>
            <a href="books.php">Books</a>
            <a href="contact.php">Contact</a>
            <a href="aboutus.php">About</a>
        </div>

        <div class="topnav_right">
        
            <?php if(isset($_SESSION['username'])){
                echo '<div class="dropdown">
                <a class="dropbtn">Settings
                  <i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-content" id="myDropdown">
                  <a href="profile.php">Profile</a>
                  <a href="#">My Book Library</a>
                  <a href="logout_action.php">Logout</a>
                </div>
              </div>';
            } else{
                echo '<a class="sign_up__item" href="sign_up.php">Sign Up</a>';
                echo '<a class="sign_in__item" href="sign_in.php">Sign In</a>';
            }?>
                 
        </div>
    </div>
    <p style="margin-left: 100px; margin-right: 100px;">This website has been created by group 4. Our group members are Bora Tosyalı, Arda Cem Özmen, Muhaned Al Hayek, Ulaş Can Çiçekli, Yüksel Köç.
     The recommendation algorithm has been written and developed by Muhaned Al Hayek.</p>
     <p style="margin-left: 100px; margin-right: 100px;">In this project, we aimed to create a useful website that will expand user's book library, help them acquire new taste,
discover books unheard of and start a new journey, right here. The recommending algorithm that the website features
has been carefully crafted and is still being developed to help the user find the next perfect book that they will never
forget. You can immidietly add similar books to your favorites and can look something for your taste at your profile page
at any time with the click of a button.</p>


    <div class="container_" style="margin-left: 100px; margin-right: 100px;">
        <div class="class1">
            <form>
                <ul class="namelist">
                    <li>Bora Tosyalı</li>
                    <li>Arda Cem Özmen</li>
                    <li>Muhaned Al Hayek</li>
                    <li>Ulaş Can Çiçekli</li>
                    <li>Yüksel Köç</li>
                </ul>
                <ul class="emails">
                    <li>bora.tosyali@bilgiedu.net</li>
                    <li>cem.ozmen@bilgiedu.net</li>
                    <li>muhanad.al.hayek@bilgiedu.net</li>
                    <li>can.cicekli@bilgiedu.net</li>
                    <li>yuksel.koc@bilgiedu.net</li>
                </ul>
            </form>
        </div>
    </div>
    <script>

</script>
</body>
</html>