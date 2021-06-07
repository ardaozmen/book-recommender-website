<?php 
session_start();
$username = $_SESSION['username'];
$conn = mysqli_connect("localhost", "group4", "group4", "group4");
$query = "SELECT * FROM profile WHERE username='".$username."'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles3.css">
    <title>Profile</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            function search_fun(){
                document.getElementById("search_button").disabled = true;
                $("#prog").show();
                var values = $("#relatedBooks").serialize();
                $.ajax({
                    url : "search.php",
                    type : "POST",
                    data : values ,
                    success: function(response){
                        $("#res").html(response);
                        $("#prog").hide();
                    },
                    error : function(jqXHR, textstatus, errorthrown){
                    
                    }
                });
            }
            
        </script>
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

    <img class= "profilepic" src= "img\profilepic.png">
<div class="info">
    <p class="personalinfo_first"><?php echo $row['name_surname'] ?></p>
    <!-- bora: alt satira iki tane php scripti ekledim age ve city nullken profil daha duzgun gozukmesi icin-->
    <p class="personalinfo"><?php echo $row['age'] ?> <?php if ($row['age'] != null) {echo "years old";} else {echo "";}?>  <br><?php echo $row['gender'] ?> <br><?php echo $row['country'] ?>
    <?php if ($row['city'] != null) {echo ",";} else {echo "";}?> 
    <?php echo $row['city'] ?> </p>
    <br>
    <br>
    <p class="bio"><?php echo $row['bio'] ?> </p>
</div>
<div class= "profilemenu">
    <ul class= "horizontal">
        <li><a href="favbooks.php"> Favorite Books</a></li>
        <li style="color: white;">|</li>
        <li><a href="editprofile.php"> Edit profile </a></li>
    </ul>
    </div>

    <div align="center">
            <?php 
                $query = "SELECT `book_name` FROM `fav_books` WHERE `username`='".$username."'";
                $result = mysqli_query($conn, $query);
                $rows = mysqli_fetch_all($result);
                $num_books = $result->num_rows;
                $rand = rand(0,$num_books-1);
                if($rows){
                $rand_book = $rows[$rand][0];
                
                echo '<form name=relatedBooks" id="relatedBooks" type="POST" action="search.php">
                <input type="hidden" name="book_search" id="book_search" value="'.$rand_book.'"/>
                <input type="hidden" name="no_books" id="no_books" value="5"/>
                <input class="sign_in__item" type="button" name="search_button" id="search_button" value="Since you have * '.$rand_book.' * you want to see similar books?" onclick="search_fun()">
                <br>
                
                </form>
                '; 
                }
            ?>
            <div id="prog">Please wait...</div>
            <script>$("#prog").hide();</script>
            <div id="res"></div>

    </div>


</body>
</html>