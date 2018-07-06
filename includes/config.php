<?php
    // when php is loaded, send this to server in pieces
    ob_start();

    // enable the use of session 
    session_start();
    
    $timezone = date_default_timezone_set("Australia/Adelaide");
    // server username password database
    $con = mysqli_connect("localhost", "root", "", "myApp");
    if(mysqli_connect_errno()){
        // string append the error message
        echo "Failed to connect" . mysqli_connect_errno();
    }

?>