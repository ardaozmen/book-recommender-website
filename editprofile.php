
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

        <

        <div class="nameform">
            <h1 class="profileheader">Edit Your Profile</h1>
            <form name="editprofile" id="editprofile" action="editprofile_action.php" method="POST">

                <div align="center" id="home-search-box">

                <p class="pages__home__hero__title">Name and Surname</p>
                        <input class="home-search-box__input" type="text" value= "<?php echo $row['name_surname'] ?>" name="name_surname" maxlength="40" style="font-size:  15px;color: grey; margin-right: 30px;">
            

                <p class="pages__home__hero__title">Age</p>
                        <input class="home-search-box__input" type="number" value= "<?php echo $row['age'] ?>" name="age" style="font-size:  15px;color: grey; margin-right: 30px;">
                
                
                <p class="pages__home__hero__title">Gender</p>
                        <select name="gender">
                        <option selected ><?php echo $row['gender'] ?></option>
                            <option value="null"></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                
                <p class="pages__home__hero__title">Country</p>
                        <input class="home-search-box__input" type="text" value= "<?php echo $row['country'] ?>" name="country" maxlength="40" style="font-size:  15px;color: grey; margin-right: 30px;">
           

                <p class="pages__home__hero__title">City</p>
                        <input class="home-search-box__input" type="text" value= "<?php echo $row['city'] ?>" name="city" maxlength="40" style="font-size:  15px;color: grey; margin-right: 30px;">
              

                <p class="pages__home__hero__title">Bio</p>
                        <input class="home-search-box__input" type="text" value= "<?php echo $row['bio'] ?>" name="bio"  style="font-size:  15px;color: grey; margin-right: 30px;">

                </div>

                <input class="sign_in__item" type="submit" name="submit_button" id="submit_button" value="Submit">
                
            </form>


        </div>

    </body>
</html>