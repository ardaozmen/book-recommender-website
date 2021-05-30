<?php
session_start();

$name_surname = $_POST['name_surname'];
$username = $_POST['username'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost", "group4", "group4", "group4");

$signedup = False ;

if($name_surname != NULL and $username != NULL and $password != NULL){
    $query = "SELECT username FROM profile WHERE username='".$username."'";
    $result = mysqli_query($conn, $query);
    
    if($result->num_rows != 0){
        $message = 'User name exists... ';   
    }
    else{  
        $query2 = "INSERT INTO `profile`(`username`, `name_surname`, `password`) VALUES ('".$username."','".$name_surname."','".md5($password)."')";
        $result2 = mysqli_query($conn, $query2);
        if($result2){
            $signedup = True;
        }
        else{
            $message = 'Something went wrong... Please try again.';
        }
        }
    }
else{
    $message = "Please fill all required fields";   
}

if($signedup){
    $_SESSION['username'] = $username;
    echo '<script>window.location = "../site/home.php"</script>';
}
else{
    echo '<p> Sign up was not successful</p>';
    echo '<p>'.$message.'</p>';

}
mysqli_close($conn);
        
?>

