<?php
if(isset($_POST['submit'])){
    $email = trim($_POST['email']);// Defining email variable
    $password = trim($_POST['password']);// Defining password variable

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Function to check if username and password 
    from file match that which is passed from the form
    */
    $data = file_get_contents("../storage/users.csv", 'r');
    if(strstr($data, "$email||$password")) {
        echo "Sorry! Invalid Email or Password. Try Again.";
    } else {
        session_start();
        $_SESSION["Logged"] = $username;
        header("Location: http://localhost/zuri/userAuth/dashboard.php");
        exit();
    }
}
    
?>

