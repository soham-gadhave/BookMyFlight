<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $conn = mysqli_connect("localhost", "root", "", "ARS");

    // Check connection

    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobileNumber = mysqli_real_escape_string($conn, $_POST['contact']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $rePassword = mysqli_real_escape_string($conn, $_POST['rePassword']);
    // attempt insert query execution
    $sql = "INSERT INTO user VALUES ('$firstName', '$lastName', '$email', '$mobileNumber', '$age', '$password')";

    if(mysqli_query($conn, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    // close connection
    mysqli_close($conn);
?>