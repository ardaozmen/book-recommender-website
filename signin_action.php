<?php
// connectingto database 
$conn = mysqli_connect("localhost", "group4", "group4", "group4"); // (server , name , password , database name)

$username = $_POST['username']; 
$password = $_POST['password']; 


if($username == NULL or $password == NULL){
    echo '<p class="error">Please fill username and password</p>';
}
else{
    $password = md5($password); 
    
    $query = "SELECT username, password FROM profile WHERE username='".$username."' AND password='".$password."'";
    $result = mysqli_query($conn, $query);

    if($result->num_rows != 0){
        session_start();
        $_SESSION['username']=$username;
        echo '<script>window.location = "../book_recommender_website/profile.php"</script>';
    }
    else{ 
        echo '<p class="error">username or password is incorrect, please try again!</p>';
    }
    mysqli_free_result($result);
    mysqli_close($conn);
}
?>