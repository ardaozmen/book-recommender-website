<?php
    session_start();
    // connection to database 
    $conn = mysqli_connect("localhost", "group4", "group4", "group4"); // (server, name, password, database name)
    $username = $_SESSION['username'];

    $name_surname = $_POST['name_surname']; 
    $age = $_POST['age']; 
    $gender = $_POST['gender']; 
    $country = $_POST['country']; 
    $city = $_POST['city']; 
    $bio = $_POST['bio']; 

    $query = "UPDATE profile SET name_surname='".$name_surname."', age='".$age."', gender='".$gender."',country='".$country."',city='".$city."', bio='".$bio."' WHERE username='".$username."'";

    echo '<script>window.location = "../site./profile.php"</script>';
    header('www.google.com');

    $result = mysqli_query($conn, $query);

    mysqli_free_result($result);
    mysqli_close($conn);

?>

