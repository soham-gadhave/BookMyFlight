<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $conn = mysqli_connect("localhost", "root", "", "ARS");

    // Check connection

    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $source = mysqli_real_escape_string($conn, $_POST['source']);
    $destination = mysqli_real_escape_string($conn, $_POST['destination']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $returnDate = mysqli_real_escape_string($conn, $_POST['returnDate']);
    $classType = mysqli_real_escape_string($conn, $_POST['classType']);
    // $age = mysqli_real_escape_string($conn, $_POST['age']);
    // $password = mysqli_real_escape_string($conn, $_POST['password']);
    // $rePassword = mysqli_real_escape_string($conn, $_POST['rePassword']);
    // attempt insert query execution
    // $sql = "INSERT INTO flight VALUES ('$source', '$destination', '$date', '$returnDate')";

    $sql = "SELECT * FROM flight WHERE source = $source AND destination = $destination AND DATE(departureTime) = $date AND classType = $classType;"

    if(mysqli_query($conn, $sql)){
        echo "Records added successfully.";
        echo $sql;
        header("Location: flightResults.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    // close connection
    mysqli_close($conn);
?>