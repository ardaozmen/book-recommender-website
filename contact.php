<!DOCTYPE html>
<html>
<head>
  <title>Contact</title>
</head>
<body style="background-color:white;">
  <link href="css/styles.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}

    input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
  </style>
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
      <a class="sign_up__item" href="sign_up.php">Sign Up</a>
      <a class="sign_in__item" href="sign_in.php">Sign In</a>
      <!--
      <a class="book_library" href="#library">My Library</a>
    -->
  </div>

</div>
<h3>Contact Form</h3>

<div class="container">
  <form action="/action_page.php"> <!-- -->
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="Turkey">Turkey</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write to us..." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>


<hr>
<hr>

<title>Add Map</title>

<style type="text/css">
  /* Set the size of the div element that contains the map */
  #map {
    height: 200px;
    /* The height is 400 pixels */
    width: 50%;
    /* The width is the width of the web page */
  }
</style>
<script>
 function initMap() {
  const ist = { lat: 41.0082, lng: 28.9784 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: ist,
  });
  const marker = new google.maps.Marker({
    position: ist,
    map: map,
  });
}
</script>
</head>
<body>
  <h3> Our location</h3>
  <div id="map"></div>
  <script
  src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly"
  async
  ></script>
  <a href="https://www.bilgi.edu.tr/tr/">Visit Bilgi University Web Page</a>

</body>
</html>
