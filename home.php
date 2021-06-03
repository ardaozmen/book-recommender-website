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
    <title>Home</title>

    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            function search_fun(){
                document.getElementById("search_button").disabled = true;
                $("#prog").show();
                var values = $("#searchForm").serialize();
                $.ajax({
                    url : "search.php",
                    type : "POST",
                    data : values ,
                    success: function(response){
                        $("#res").html(response);
                        $("#prog").hide();
                        document.getElementById("search_button").disabled = false;

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

    <div class="main">
        <div class="pages__home__hero">

          <h1 class="pages__home__hero__title">Discover books you'll love!</h1>

          
          <h2 class="pages__home__hero__byline">
            Enter a book you like and the site will analyse our huge database of real readers' favorite books to provide book recommendations and suggestions for what to read next.
        </h2>

        <form name="searchForm" id="searchForm" action="search.php" method="POST">
        <div class="pages__home__hero__search-box-container" width="500">
            <div id="home-search-box" width="500">
                
                <input class="home-search-box__input" placeholder="Search a Book..." width="500" name="book_search" id="book_search">
                <select name="no_books" id="no_books">
                    <option value="5" selected>5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                 </select>
            </div>
                 <br>
            <input class="sign_in__item" type="button" name="search_button" id="search_button" value="Search" onclick="search_fun()">
                <br>

            <div id="prog">Please wait...</div>
            <script>$("#prog").hide();</script>
            <div id="res"></div>
        </div>
        </form>
    </div>


</body>

</html>