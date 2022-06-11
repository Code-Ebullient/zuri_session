<?php
if(isset($_POST['submit'])){
    $email = trim($_POST['email']);// Defining email variable
    $newpassword = trim($_POST['password']);//Defining newpassword variable

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){
    //open file and 
    $file = fopen("../storage/users.csv", 'r+'); //open file
    $data = json_decode(file_get_contents($file, $this->storage)); //check if the email exist
    if(preg_match_all("/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i", $data, $matches)){ //if it does, replace the password
        $newpassword[$email] = $newpassword;
        file_put_contents($this->storage, json_decode($newpassword));
        //var_dump ($newpassword);
    } else {
        echo "Email does not match";
    }
    fclose($file);
}


