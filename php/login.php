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
    //1
    // if (!strlen($email) || !strlen($password)) {
    //     die('Please enter a email and password');
    // }
    
    // $success = false;
    
    // $handle = fopen("../storage/users.csv", "r");
    
    // while (($data = fgetcsv($handle)) !== FALSE) {
    //     if (strtolower($data[1] == $email && $data[2] == $password)) {
    //         $success = true;
    //         break;
    //     }
    // }
    
    // fclose($handle);
    
    // if ($success) {
    //     echo "Welcome";
    //     header("Location: dashboard.php");
    //     exit();
    // } else {
    //     echo "Login Failed";
    // }

    //2
    // session_start(); 
    // if(isset($_SESSION['email']))   // Checking whether the session is already there or not if 
    //                           // true then header redirect it to the home page directly 
    // {
    // header("Location: dashboard.php");
    // exit();
    // }
 
    // if(isset($_POST['submit']))   // it checks whether the user clicked login button or not 
    // {
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
        
    //     if(isset($_POST["email"]) && isset($_POST["password"])){
    //         $file = fopen('../storage/users.csv', 'r');
    //         $good=false;
    //         while(!feof($file)){
    //             $line = fgets($file);
    //             $array = explode(";",$line);
    //             if(trim($array[0]) == $_POST['email'] && trim($array[1]) == $_POST['password']){
    //                 $good=true;
    //                 break;
    //             }
    //         }
    //         if($good){
    //             $_SESSION['email'] = $email;
    //         } else {
    //             echo "Invalid Email or Password";
    //         }
    //         fclose($file);
    //     }

    // }
 
    //3
    
    //4
    // if(isset($d_file[$username]) && ($password) == $username) {
    //     session_start();
    //     $_SESSION["Logged"] = $username;
    //     header("Location: dashboard.php");
    // } else {
    //     if(isset($d_file[$username]) && ($password) != $username) {
    //         echo "Username or Password Incorrect";
    //         header("Location: login.php");
    //     }
    // }

?>

