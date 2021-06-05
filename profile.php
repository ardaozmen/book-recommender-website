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
    <link rel="stylesheet" href="css/styles.css">
    <title>Booklet</title>
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
                echo '<a class="book_library" href="#library">My Book Library</a>';
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

    <div>
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