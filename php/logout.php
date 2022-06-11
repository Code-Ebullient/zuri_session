<?php
session_start();

function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
    if ( isset( $_SESSION['Logged'] ) ) unset( $_SESSION['Logged'] ); 
    session_destroy();
    Header("Location: .../forms/login.html");
    exit();

}

