<?php
// remove sesson variables and go to main page
session_start();
session_unset();
session_destroy();
echo '<script>window.location = "../book_recommender_website/home.php"</script>';
?>