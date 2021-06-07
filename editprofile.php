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
    <link rel="stylesheet" href="css/stylesB.css">
    <title>Booklet</title>
    <style>
       /* NavBar */

.topnav {
    background-color: rgb(255, 255, 255);
    overflow: hidden;
    /*line-height: 50px;*/
    font-family: Barlow, Helvetica, Arial, sans-serif; 
    
}

.topnav_left a {
    float: left;
    color: #000000;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 14px;
    border-left: 1px solid black; /* cizgiler */
    margin-top: 20px; /* line length'i kaldırdığım için hizalamak amacıyla koydum */
    margin-bottom: 15px;
}

.topnav_right a {    
    float: right;        
}

.logo {
    float: left;
    display: block;
    margin-left: 30px;
    margin-top: 20px;
    margin-right: 30px;
    width: 95px;
    height: 50px;
    margin-bottom: 15px;
    
     

}

.sign_in__item {   
    background-color:royalblue;
    color: #ffffff;
    border-radius: 16px;
    box-shadow: 0px 2px 5px 1px rgb(68, 110, 255);
    padding: 14px 16px;
    margin: 12px 12px 12px 0px; /* top ve bottom marjin eklendi */
    text-decoration: none;
    font-size: 14px;
    font-weight: 400;
    max-height: 40px;
    margin-top: 20px;
    margin-bottom: 15px;

}

.sign_up__item {
    background-color:royalblue;
    color: #ffffff;
    border-radius: 16px;
    box-shadow: 0px 2px 5px 1px rgb(68, 110, 255);
    padding: 14px 16px;
    margin: 12px 12px 12px 0px; /* top ve bottom marjin eklendi */
    text-decoration: none;
    font-size: 14px;
    font-weight: 400;
    max-height: 40px;   
    margin-top: 20px;
    margin-bottom: 15px;
    margin-right: 30px; 
              
}
/* Dropdown */
.dropdown {
    float: right;
    overflow: hidden;
}

.dropdown .dropbtn {
    float: right;
    color: #000000;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 14px;
    border-left: 1px solid black; /* cizgiler */
    margin-top: 20px; /* line length'i kaldırdığım için hizalamak amacıyla koydum */
    margin-bottom: 15px;
    margin-right: 30px;
  }
  
 
  
  /* Dropdown content (hidden by default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: transparent;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
  
  /* Links inside the dropdown */
.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
  
  /* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
    background-color: transparent;
}
  
  /* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

.show {
    display: block;
}
    </style>

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
                  <a href="favbooks.php">My Book Library</a>
                  <a href="logout_action.php">Logout</a>
                </div>
              </div>';
            } else{
                echo '<a class="sign_up__item" href="sign_up.php">Sign Up</a>';
                echo '<a class="sign_in__item" href="sign_in.php">Sign In</a>';
            }?>
                 
        </div>
    </div>

        

        <div class="nameform">
            <h1 class="profileheader">Edit Your Profile</h1>
            <form name="editprofile" id="editprofile" action="editprofile_action.php" method="POST">

                <div id="home-search-box">

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
                    <textarea name="bio" cols="30" rows="10" class="home-search-box__input_bio"><?php echo $row['bio'] ?></textarea>
                </div>

                <input class="sign_in__item" type="submit" name="submit_button" id="submit_button" value="Submit">
                
            </form>


        </div>

    </body>
</html>