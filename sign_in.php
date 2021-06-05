<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booklet</title>
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            function signin_fun(){
                var values = $("#signinForm").serialize();
                $.ajax({
                    url : "signin_action.php",
                    type : "POST",
                    data : values ,
                    success: function(response){
                        $("#res").html(response);
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
    <div class="main">
        <div class="pages__home__hero">
          <form name="signinForm" id="signinForm" action="signin_action.php" method="POST">
          <h1 class="pages__home__hero__title">Username</h1>
            <div id="home-search-box">
                <div class="home-search-box__icon"></div>
                <input class="home-search-box__input" type="text" name="username" maxlength="40" style="font-size:  15px;color: grey; margin-right: 30px;"></div>
          <h1 class="pages__home__hero__title">Password</h1>
            <div id="home-search-box">
                <div class="home-search-box__icon"></div>
                <input class="home-search-box__input" type="password" name="password" maxlength="40" style="font-size: 15px;color: grey; margin-right: 30px;"></div>
                <input class="sign_in__item" type="button" name="signin_button" id="signin_button" value="SIGN IN" onclick="signin_fun()">
                <div id='res'></div>
          </form>
        
        </div>
    </div>
    </body>
</html>