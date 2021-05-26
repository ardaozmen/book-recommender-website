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
    <a class="active" href="test.html">Home</a>
    <a href="books.html">Books</a>
    <a href="contact.php">Contact</a>
    <a href="about.html">About</a>
</div>

<div class="topnav_right">
    <a class="sign_up__item" href="#signup">Sign Up</a>
    <a class="sign_in__item" href="#signin">Sign In</a>
    <a class="book_library" href="#library">My Book Library</a>
</div>
</div>

    <img class= "profilepic" src= "profilepic.jpg">
    <div class="info">
    <p class="name"> <?php echo $_POST["name"] ?? 'Name' ?></p>
    <p class="personalinfo"> <?php echo $_POST["age"] ?? 'Age' ?> <?php echo $_POST["gender"] ?? 'Gender' ?> <?php echo $_POST["city"] ?? 'City' ?> <?php echo $_POST["country"] ?? 'Country' ?> <p>
    <p class="bio"><?php echo $_POST["bio"] ?? 'Bio goes here' ?> </p>
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