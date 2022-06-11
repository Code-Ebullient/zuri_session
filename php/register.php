<?php
if(isset($_POST['submit'])){
    $username = "Username:".$_POST['fullname'].""; // Defining the username variable
    $email = "Email:".$_POST['email'].""; // Defining the email variable
    $password = "Password:".$_POST['password'].""; // Defining the password variable
    // $username = $_POST['fullname'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    if(isset($username) && isset($email) && isset($password)) {
        $file = file_get_contents("../storage/users.csv");
        $string = "$username||$email||$password";
        if(!strstr($file, "$string")){
            $myFile = "../storage/users.csv";
            $fh = fopen($myFile, 'a') or die("can't open file");
            $stringData = "$username||$email||$password\n";
            fwrite($fh, $stringData);
            echo "User Successfully registered.";
            fclose($fh);
        } else {
            echo "Sorry the name: $username and email: $email already exist.";
        }
    }
}

?>


