<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booklet</title>
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            function signup_fun(){
                var values = $("#signupForm").serialize();
                $.ajax({
                    url : "signup_action.php",
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
        <style>
    Body {
	font-family: Arial;

	}

	button {
		border-radius: 16px;
        padding: 14px 205px;
        margin: 12px 12px 12px 0px;
        font-weight: 600;
        
	}

	form {
		border: 3px solid #f1f1f1;
		position: fixed;
		top: 50%;
		left: 50%;
		/* bring your own prefixes */
		transform: translate(-50%, -50%);
        border-radius: 64px;
        width: 500px;
        height: 450px;
	}

	input[type=text], input[type=password] {   
		width: 100%;   
		margin: 10px 10px 10px 0;  
		padding: 10px 10px;   
		display: inline-block;   
		border: 1px solid grey;   
		box-sizing: border-box;
        outline: none;
           
	}

	button:hover {   
		opacity: 0.7;   
	}   

	
	.container {
        width: 500px;
        height: 350px;
		padding: 25px;   
		background-color: white;
        border-radius: 64px;  
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
    <form name="signinForm" id="signinForm" action="signin_action.php" method="POST">  
		<div class="container">   
        <img src="img/booklet.png" alt="logo" width="140" height="75" style="display: block; margin-left: auto; margin-right: auto; ">
            <label>Name Surname : </label>   
			<input type="text" placeholder="Enter Full Name" name="fullname" required> 
            <label>Username : </label>   
			<input type="text" placeholder="Enter Username" name="username" required>  
			<label>Password : </label>   
			<input type="password" placeholder="Enter Password" name="password" required>  
			<button type="submit">Sign Up</button>   
			<input type="checkbox" checked="checked"> Remember me   
			  
			Forgot <a href="#"> password? </a>   
		</div>
        <div><div id='res'></div></div>   
	</form>

    
    </body>
</html>