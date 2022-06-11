<?php
if(isset($_POST['submit'])){
    $email = trim($_POST['email']);// Defining email variable
    $newpassword = trim($_POST['password']);//Defining newpassword variable

    resetPassword($email, $password);
}

function resetPassword($email, $password){
    //open file and check if the username exist inside
    $file = fopen("../storage/users.csv", 'r');
    if(strstr($email[$_POST] == ))

    //if it does, replace the password
}
echo "HANDLE THIS PAGE";


