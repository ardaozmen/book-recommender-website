<?php 
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Booklet | Contact</title>
  <link href="css/styles.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color:white;">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>

* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
}

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

.search_button {
    border-radius: 16px;
    padding: 14px 64px;
    margin: 12px 12px 12px 0px;
    font-weight: 600;
}

.no_books {
    border-radius: 16px;
    padding: 14px 16px;
    margin: 12px 12px 12px 0px;
    outline: none;
    background: transparent;
    font-weight: 600;
}

.book_library {
    float: right;
    text-align: center;
    margin-right: 12px;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 16px;
    color: #000000;
    font-size: 12px;
}

.pages__home__hero {
    display: flex;
    flex-direction: column;
    align-items: center;
    box-sizing: border-box;
    width: 100%;
    min-height: 200px;
    background-color: #F0F1F4;
    color: #333333;
    font-family: Barlow, Helvetica, Arial, sans-serif;
    text-align: center;
    padding: 40px 15px 250px;
    background-image: url("img/background.jpeg");
    background-repeat: no-repeat;
    background-position: center bottom;
}

.pages__home__hero__title {
    color: #111;
    font-size: 36px;
    font-weight: 600;
    line-height: 43px;
    max-width: 600px;
    margin: 0px;
}

.pages__home__hero__byline {
    color: #4e4e4e;
    font-size: 20px;
    font-weight: 400;
    line-height: 1.5;
    max-width: 800px;
}

.pages__home__hero__search-box-container {
    max-width: 750px;
    width: 100%;
    height: 91px;
    margin-top: 15px;
}

#home-search-box {
    display: flex;
    flex-direction: row;
    align-items: center;
    box-sizing: border-box;
    width: 100%;
    height: 100%;
    background-color: #fff;
    border: 1px solid #e9e9e9;
    border-radius: 64px;
    box-shadow: 0 8px 20px 0 rgb(0 0 0 / 5%);
    
}

#home-search-box .home-search-box__icon {
    height: 26px;
    width: 26px;
    margin-left: 10px;    
}

#home-search-box .home-search-box__input {    
    height: 100%;
    width: 1000px;
    margin-left: 20px;
    border: none;
    outline: none;
    background: transparent;
    font-family: Barlow, Helvetica, Arial, sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 19px;
    margin-left: 0px;
}

.input {
    writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    appearance: auto;
    background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
    -webkit-rtl-ordering: logical;
    cursor: text;
    margin: 0em;
    font: 400 13.3333px Arial;
    padding: 1px 2px;
    border-width: 2px;
    border-style: inset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}

#contact * {
    box-sizing: border-box;
}

#contact .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 15px 0
}

#contact .row {
    display: flex;
    flex-direction: row;
}

#contact .row .column {
    display: block;
    width: 50%;
    padding: 0 16px;
}

#contact .row .column iframe {
    display: block;
    width: 100%;
    height: 100%;
}

#contact input[type="text"],
#contact select,
#contact textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

#contact input[type="submit"] {
    border-radius: 16px;
    padding: 14px 64px;
    margin: 12px 12px 12px 0px;
    font-weight: 600;
}

#contact input[type="submit"]:hover {
    border-radius: 16px;
    padding: 14px 64px;
    margin: 12px 12px 12px 0px;
    font-weight: 600;
}

.visit_me {
    margin-left: 12px;
}

    
  </style>


  </head>

  <body id="contact">
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
    

    <div class="container">
      <div class="row">
        <div class="column">
          <form id="form">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="first_name" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="last_name" placeholder="Your last name..">

            <label for="country">Country</label>
            <select id="country" name="country">
            </select>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write to us..." style="height:200px"></textarea>

            <input type="submit" id="submit" value="Submit">
          </form>
        </div>
        <div class="column">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2500.4548784811923!2d28.94520277596019!3d41.06658598234347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x68867ce8461ce254!2zQsSwTEfEsCDDnE7EsFZFUlPEsFRFU8SwIFNBTlRSQUwgS0FNUMOcU8Oc!5e0!3m2!1str!2sus!4v1622963413200!5m2!1str!2sus"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>

    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
    <script src="main.js"></script>
  </body>
<footer>

  <div class="visit_me" id="map">
  <h3>Our Location: </h3>  
  <a href="https://www.bilgi.edu.tr/tr/">Visit Bilgi University Web Page</a>
  </div>
  
  
  </footer>
</html>